from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers , company

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYwNDU0ODAsImV4cCI6MTQ5NjA3MDY4MCwibmJmIjoxNDk2MDQ1NDgwLCJqdGkiOiIwYjMwNTAxMDJiNTliNTdhYjJmNWY5ZDE3MGFlYzU0OCJ9.WIi3ktOoYdLyodMDVCcIareu0PyBXIK8UlkN0VrFS44"

        #test company
        company = 8
     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
        
    #Add  new smiley
    @task(1)
    def addRoom(self):
        response =  self.client.post("/smileys",files = {'file': ('smile.png', open('smile.png', 'rb'))},data={"code":self.randomString()}, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update created smiley
            self.client.put("/smileys/"+str(id),json={"code":self.randomString()},headers=headers,name="/smileys/:id")
                
            #delete created smiley
            self.client.delete("/smileys/"+str(id),headers=headers,name="/smileys/:id")

    #Get smileys for company
    @task(2)
    def getSmileys(self):
        response = self.client.get("/smileys/company/"+str(company),headers=headers)

        
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(3))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
