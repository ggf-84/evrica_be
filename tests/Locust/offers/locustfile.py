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
        response =  self.client.post("/offers",json={
        "title":self.randomString(),
        "status_id":self.randomInt(),
        "currency_id":self.randomInt(),
        "sum":self.randomInt(),
        "responsible":self.randomInt(),
        "post_date":"2017-05-01",
        "end_date":"2017-05-01",
        "available_all":1,
        "client_id":self.randomInt(),
        "description":self.randomString(),
        "conditions":self.randomString(),
        "comment":self.randomString(),
        "company_id":self.randomInt()
        
        }, headers=headers)
        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update 
            self.client.put("/offers/"+str(id),json={
        "title":self.randomString(),
        "status_id":self.randomInt(),
        "currency_id":self.randomInt(),
        "sum":self.randomInt(),
        "responsible":self.randomInt(),
        "post_date":"2017-05-01",
        "end_date":"2017-05-01",
        "available_all":1,
        "client_id":self.randomInt(),
        "description":self.randomString(),
        "conditions":self.randomString(),
        "comment":self.randomString(),
        "company_id":self.randomInt()
        
        },headers=headers,name="/offers/:id")
            
        #delete 
        self.client.delete("/offers/"+str(id),headers=headers,name="/offers/:id")

 
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

    @task(2)
    def getAll(self):
        response = self.client.get("/offers",headers=headers)

    @task(3)
    def getPagination(self):
        response = self.client.get("/offers/1/15",headers=headers)
     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
