from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, getId, userId,company

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTY4MjU1NzYsImV4cCI6MTQ5Njg1MDc3NiwibmJmIjoxNDk2ODI1NTc2LCJqdGkiOiJsTHFLVzM2UjdCNjJaMFd3In0.nOtl1zpAO44UB_NdHVI3HkpEFt9kyilPLJu35rqPlGE"

        # id for 
        getId = 1
        
        #user id
        userId = 9

        #company
        company = 11

        
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add new 
    @task(1)
    def addRoom(self):
        response =  self.client.post("/tasks",json={
           "name":self.randomString(),
           "description":self.randomString(),
           "start_time":"2017-05-01",
           "deadline":"2017-05-01",
           "project_id":self.randomInt(),
           "estimation":self.randomInt(),
           "estimation_unit":"Days",
           "is_important":1,
           "responsible_user_id":self.randomInt(),
           "creator_id":self.randomInt()
        
        }, headers=headers)
        
        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update 
            rsp = self.client.put("/tasks/"+str(id),json={
           "name":self.randomString(),
           "description":self.randomString(),
           "start_time":"2017-05-01",
           "deadline":"2017-05-01",
           "project_id":self.randomInt(),
           "estimation":self.randomInt(),
           "estimation_unit":"Days",
           "is_important":1,
           "responsible_user_id":self.randomInt(),
           "creator_id":self.randomInt()
            
            },headers=headers,name="/tasks/:id")

            
        #delete 
        self.client.delete("/tasks/"+str(id),headers=headers,name="/tasks/:id")

    @task(2)
    def getAll(self):
        response = self.client.get("/tasks",headers=headers)

    @task(3)
    def getById(self):
        response = self.client.get("/tasks/"+str(getId),headers=headers)

    @task(4)
    def getByCompany(self):
        response = self.client.get("/tasks/company/"+str(company),headers=headers)

    @task(5)
    def getByProject(self):
        response = self.client.get("/tasks/project/"+str(getId),headers=headers)

    @task(6)
    def getByUser(self):
        response = self.client.get("/tasks/user/"+str(userId),headers=headers)
        
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

    
     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
