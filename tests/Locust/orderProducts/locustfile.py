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
        response =  self.client.post("/order/products",json={
           "order_id":self.randomInt(),
           "product_id":self.randomInt(),
           "quantity":self.randomInt(),
           "price":self.randomInt(),
           "um_id":self.randomInt(),
           "total":self.randomInt()
          
        }, headers=headers)
        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update 
            self.client.put("/order/products/"+str(id),json={
            "order_id":self.randomInt(),
            "product_id":self.randomInt(),
            "quantity":self.randomInt(),
            "price":self.randomInt(),
            "um_id":self.randomInt(),
            "total":self.randomInt()
              
        },headers=headers,name="/order/products/:id")
            
        #delete 
        self.client.delete("/order/products/"+str(id),headers=headers,name="/order/products/:id")

    @task(2)
    def getById(self):
        response = self.client.get("/order/"+str(getId)+"/products",headers=headers)

    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))

    def randomInt(self):
        return str(random.randrange(0, 101, 2))

    
     
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
