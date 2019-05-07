from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, getId, userId,company

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTY2NDk4NjcsImV4cCI6MTQ5NjY3NTA2NywibmJmIjoxNDk2NjQ5ODY3LCJqdGkiOiI0MTI2MDM2ZTcxYTdiYWEzZjA5MTAxYWM5ZWM2MTVjNCJ9.65HXCU27H7lJKT6GpRITPKOzK5ezLVHNYLFKuIAWVqA"
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
        response =  self.client.post("/module",json={
        "title":self.randomString(),
        "code":self.randomString()
        }, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update 
            self.client.put("/module/"+str(id),json={
            "title":self.randomString(),
            "code":self.randomString()
            },headers=headers,name="/module/:id")
            
            #delete 
            self.client.delete("/module/"+str(id),headers=headers,name="/measure/:id")

 
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
