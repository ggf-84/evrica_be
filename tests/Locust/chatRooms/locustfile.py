from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, create 

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTY2NDk4NjcsImV4cCI6MTQ5NjY3NTA2NywibmJmIjoxNDk2NjQ5ODY3LCJqdGkiOiI0MTI2MDM2ZTcxYTdiYWEzZjA5MTAxYWM5ZWM2MTVjNCJ9.65HXCU27H7lJKT6GpRITPKOzK5ezLVHNYLFKuIAWVqA"
        #create
        create = {}
        create["administrator"] = 1
        create["status"] = 1
        create["company_id"] = 8
        
     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add new room
    @task()
    def addRoom(self):
        response =  self.client.post("/room",json={"title":self.randomString(),"status":str(create["status"]),"administrator":str(create["administrator"]), "company_id":str(create["company_id"])}, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update created room
            self.client.put("/room/"+str(id),json={"title":"updated","status":str(create["status"]),"administrator":str(create["administrator"]),"company_id":str(create["company_id"])},headers=headers,name="/room/:id")
            
            #delete created room
            self.client.delete("/room/"+str(id),headers=headers,name="/room/:id")


    #Get list of rooms for current user    
    @task()
    def getRooms(self):
        response = self.client.get("/room/list",headers=headers)

    #Get room for conversation with between current user and another user
    @task()
    def getUserRoom(self):
        response = self.client.get("/room/user/8",headers=headers)
    
    
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 19000
