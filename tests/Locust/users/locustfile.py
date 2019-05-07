from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        """ on_start is called when a Locust start before any task is scheduled """
        """self.login()"""
        
        global token, headers, user, newUser
        
        #Please set config values
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTY4MjU1NzYsImV4cCI6MTQ5Njg1MDc3NiwibmJmIjoxNDk2ODI1NTc2LCJqdGkiOiJsTHFLVzM2UjdCNjJaMFd3In0.nOtl1zpAO44UB_NdHVI3HkpEFt9kyilPLJu35rqPlGE"
        headers = {'Authorization': 'Bearer '+token}

        #update user password variables
        user = {}
        user["id"] = 1
        user["password"] = "q1w2e3"
        user["new_password"] = "q1w2e3"


        #insert user variables
        newUser = {}
        newUser["firstname"] = 'test'
        newUser["lastname"] = 'test'
        newUser["password"] = "q1w2e3"

     
    
    #Auth user    
    @task(1)
    def login(self):
	response = self.client.post("/auth", {"email":"veremiov@hotmail.com", "password":"q1w2e3"})
		
    #Get all users
    @task(2)
    def users(self):
	self.client.get("/users",data="",headers=headers)

    #get user info
    @task(3)
    def profile(self):
        self.client.get("/auth/user",data="",headers=headers)
        
    #get users from company
    @task(4)
    def userCompany(self):
        self.client.get("/users/company/8",data="",headers=headers)
        
    #Change password for user
    @task(5)
    def changePassword(self):
        self.client.post("/user/change/password",{"id":`user["id"]`,"password":`user["password"]`,"new_password":`user["new_password"]`},headers=headers)

    #Get information about user by id
    @task(6)
    def getUser(self):
        self.client.get("/users/"+`user["id"]`,data="",headers=headers)

    #Insert new user
    @task(7)
    def insertUser(self):
        self.client.post("/users",{"firstname":`newUser["firstname"]`,"lastname":`newUser["lastname"]`,"email":str(self.randomString())+"@mail.com","password":`newUser["password"]`},headers=headers)
	
    #Update user
    @task(8)
    def updateUser(self):
	self.client.put("/users/"+`user["id"]`,{"firstname":"updated","lastname":"updated"},headers=headers)
    
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))
    	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
