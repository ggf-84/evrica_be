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
        response =  self.client.post("/visitors",json={
            "ip":self.randomString(),
            "domain":self.randomString(),
            "first_page":self.randomString(),
            "visit":self.randomInt(),
            "country":self.randomString(),
            "city":self.randomString(),
            "language":self.randomString(),
            "browser":self.randomString(),
            "browser_version":self.randomString(),
            "os":self.randomString(),
            "os_version":self.randomString(),
            "mobile":1,
            "fingerprint":self.randomString(),
            "cookie_enabled":1
            })
        
        id = json.loads(response.content)["data"]
        
        if id:
            #update 
            self.client.put("/visitors/"+str(id),name="/visitors/:id")
            self.client.post("/visitors/activity",json={"visitor":str(id)},name="/visitors/activity/update")

            
        #delete 
        #self.client.delete("/vat/"+str(id),headers=headers,name="/visitors/:id")

   
    @task(2)
    def getAllOnline(self):
        self.client.get("/onlinevisitors",headers=headers)

    @task(3)
    def getAll(self):
        self.client.get("/visitors",headers=headers)

    @task(4)
    def saveNewVisitor(self):
        self.client.post("/visitors/activity",json={
            "ip":self.randomString(),
            "domain":self.randomString(),
            "first_page":self.randomString(),
            "visit":self.randomInt(),
            "country":self.randomString(),
            "city":self.randomString(),
            "language":self.randomString(),
            "browser":self.randomString(),
            "browser_version":self.randomString(),
            "os":self.randomString(),
            "os_version":self.randomString(),
            "mobile":1,
            "fingerprint":self.randomString(),
            "cookie_enabled":1
            })
        
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

    
     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
