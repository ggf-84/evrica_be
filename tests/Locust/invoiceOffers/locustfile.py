from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, getId

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYxMzE2NDUsImV4cCI6MTQ5NjE1Njg0NSwibmJmIjoxNDk2MTMxNjQ1LCJqdGkiOiI4NmMxZGEzYTgzYThhMDVhYzUxMGYxN2FjMjg1MzU3NyJ9.KMPTAigJcICQeBjzxFCjTUVU2lOkzNwuH5qxKNd7E1M"

        # id for selectById
        getId = 1
        
     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
    #Add new room
    @task(1)
    def addRoom(self):
        response =  self.client.post("/invoice/offers",json={"invoice_id":self.randomInt(),"offer_id":self.randomInt()}, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update contact categories
            self.client.put("/invoice/offers/"+str(id),json={"invoice_id":self.randomInt(),"offer_id":self.randomInt()},headers=headers,name="/offers/:id")
            
            #delete contact categories
            self.client.delete("/invoice/offers/"+str(id),headers=headers,name="/offers/:id")

    #Get all event types
    @task(2)
    def getById(self):
        response = self.client.get("/invoice/"+str(getId)+"/offers",headers=headers)
                
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
