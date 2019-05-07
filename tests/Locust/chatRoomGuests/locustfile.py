from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, create 

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTU3ODc1NjQsImV4cCI6MTQ5NTgxMjc2NCwibmJmIjoxNDk1Nzg3NTY0LCJqdGkiOiI4NTkxYTliMzU5MzIwMmY5MWRhYjk4NzNmOWI4NGYwMyJ9.HnxUqh-nvnVlOUHM9vr_FPvmOpxbGUlYYu-PBZ43s3Y"

        #create
        create = {}
        create["room_id"] = 1
        create["guest_id"] = 1
        
     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add new guest room
    @task()
    def addRoom(self):
        response =  self.client.post("/room/guests",json={"room_id":random.randrange(0, 101, 2),"guest_id":random.randrange(0, 101, 2)}, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update created guest room
            self.client.put("/room/guests/"+str(id),json={"room_id":random.randrange(0, 101, 2),"guest_id":random.randrange(0, 101, 2)},headers=headers,name="/room/:id")
            
            #delete created guest room
            self.client.delete("/room/guests/"+str(id),headers=headers,name="/room/:id")


    
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 19000
