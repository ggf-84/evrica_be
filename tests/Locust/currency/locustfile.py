from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, getId

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYyMjE0MzMsImV4cCI6MTQ5NjI0NjYzMywibmJmIjoxNDk2MjIxNDMzLCJqdGkiOiJmMjZmZGVjZDY0NDA5NTQ2MjQwZWYyOTA5Y2NiNDIzYiJ9.QMqSWC1P80HBxPmuE_cAjBQgR-a_9jcO0vQch-06ig8"
        # id for selectById
        getId = 1
     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add new room
    @task(1)
    def addRoom(self):
        response =  self.client.post("/currency",json={
            "title":self.randomString(),
                        }, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update contact categories
            self.client.put("/currency/"+str(id),
            json={
            "title":self.randomString(),
                        },headers=headers,name="/currency/:id")
            
            #delete contact categories
            self.client.delete("/currency/"+str(id),headers=headers,name="/currency/:id")


    @task(2)
    def getAll(self):
        response = self.client.get("/currency",headers=headers)

        
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
