from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, getId, userId,company

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYxNTcwMjQsImV4cCI6MTQ5NjE4MjIyNCwibmJmIjoxNDk2MTU3MDI0LCJqdGkiOiIyZWQzYWNiZWUzN2QzMDY2MDYxZmNhMTZiYjE4OWU3YiJ9.IgN6tM8myseJCL7sF-TkOoAXXKDWv7Z_l7J5_2BrUao"

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
        response =  self.client.post("/users/departments",json={
           "department_id":self.randomInt(),
           "user_id":self.randomInt(),
          
        
        }, headers=headers)
        
        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update 
            rsp = self.client.put("/users/departments/"+str(id),json={
           "department_id":self.randomInt(),
           "user_id":self.randomInt(),
            },headers=headers,name="/users/departments/:id")

            
        #delete 
        self.client.delete("/users/departments/"+str(id),headers=headers,name="/users/departments/:id")

   
        
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

    
     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
