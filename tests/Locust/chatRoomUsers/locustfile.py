from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, create 

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYwNDU0ODAsImV4cCI6MTQ5NjA3MDY4MCwibmJmIjoxNDk2MDQ1NDgwLCJqdGkiOiIwYjMwNTAxMDJiNTliNTdhYjJmNWY5ZDE3MGFlYzU0OCJ9.WIi3ktOoYdLyodMDVCcIareu0PyBXIK8UlkN0VrFS44"

     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add  user to room
    @task(1)
    def addRoom(self):
        response =  self.client.post("/room/users",json={"room_id":random.randrange(0, 101, 2),"user_id":random.randrange(0, 101, 2)}, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update created user room
            self.client.put("/room/users/"+str(id),json={"room_id":random.randrange(0, 101, 2),"user_id":random.randrange(0, 101, 2)},headers=headers,name="/room/users/:id")
            
            #delete created user room
            self.client.delete("/room/users/"+str(id),headers=headers,name="/room/users/:id")


    
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
