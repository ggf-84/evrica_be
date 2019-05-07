from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, getId, getByUser

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYwNjIwNzksImV4cCI6MTQ5NjA4NzI3OSwibmJmIjoxNDk2MDYyMDc5LCJqdGkiOiJjYThiNDYyMjRkODhlZmM5NTdiZWFhOWViYmNiMGJmYSJ9.4y3vywYYSlaBKRsNKuj4MW749EQVlYC8r7KUBrfPq5A"
        # id for selectById
        getId = 1
        getByUser = 1
     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add new room
    @task(1)
    def addRoom(self):
        response =  self.client.post("/department",json={
            "title":self.randomString(),
                        }, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update contact categories
            self.client.put("/department/"+str(id),
            json={
            "title":self.randomString(),
                        },headers=headers,name="/department/:id")
            
            #delete contact categories
            self.client.delete("/department/"+str(id),headers=headers,name="/department/:id")


    @task(2)
    def getRights(self):
        response = self.client.get("/department/"+str(getId)+"/rights",headers=headers)

    @task(3)
    def getByUser(self):
        response = self.client.get("/department/user",headers=headers)

    @task(4)
    def getByDep(self):
        response = self.client.get("/department/"+str(getId)+"/users",headers=headers)

    @task(5)
    def updateRights(self):
        response = self.client.put("/department/rights",json={"department":1,"right":1},headers=headers)
    
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
