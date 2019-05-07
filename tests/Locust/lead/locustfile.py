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
    @task()
    def addRoom(self):
        response =  self.client.post("/leads",json={
            "name":self.randomString(),
            "status_id":self.randomInt(),
            "status_description":self.randomString(),
            "currency_id":self.randomInt(),
            "opportunity":self.randomInt(),
            "source_id":self.randomInt(),
            "responsible_user_id":self.randomInt(),
            "contact_details_id":self.randomInt(),
            "level":self.randomInt(),
            "company_id":self.randomInt(),
            "client_company_id":self.randomInt()
            }, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update 
            self.client.put("/leads/"+str(id),json={
            "name":self.randomString(),
            "status_id":self.randomInt(),
            "status_description":self.randomString(),
            "currency_id":self.randomInt(),
            "opportunity":self.randomInt(),
            "source_id":self.randomInt(),
            "responsible_user_id":self.randomInt(),
            "contact_details_id":self.randomInt(),
            "level":self.randomInt(),
            "company_id":self.randomInt(),
            "client_company_id":self.randomInt()
            
            },headers=headers,name="/leads/:id")
            
            #delete 
            self.client.delete("/leads/"+str(id),headers=headers,name="/leads/:id")

    #Get  by id
    @task()
    def getById(self):
        response = self.client.get("/leads/"+str(getId),headers=headers)

    #Get all 
    @task()
    def getByUser(self):
        response = self.client.get("/leads/user/"+str(userId),headers=headers)

    #Get by company
    @task()
    def getByCompany(self):
        response = self.client.get("/leads/company/"+str(company),headers=headers)

    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
