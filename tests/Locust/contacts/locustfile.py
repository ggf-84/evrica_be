from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers , company , contact_id , user_id, newContact

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYwNjIwNzksImV4cCI6MTQ5NjA4NzI3OSwibmJmIjoxNDk2MDYyMDc5LCJqdGkiOiJjYThiNDYyMjRkODhlZmM5NTdiZWFhOWViYmNiMGJmYSJ9.4y3vywYYSlaBKRsNKuj4MW749EQVlYC8r7KUBrfPq5A"
        contact_id = 1
        user_id = 9
        #test company
        company = 8

     
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        
        
    #Add new contact
    @task(1)
    def addContact(self):
        
        response =  self.client.post("/contacts",json={
            "contact_deails_id":random.randrange(0, 101, 2),
            "category_id":random.randrange(0, 101, 2),
            "responsible_user_id":random.randrange(0, 101, 2),
            "source_id":random.randrange(0, 101, 2),
            "status":random.randrange(0, 101, 2),
            "visible":random.randrange(0, 101, 2),
            "company_id":random.randrange(0, 101, 2),
            "creator_id":random.randrange(0, 101, 2),
            "client_company_id": random.randrange(0, 101, 2),
            "level":random.randrange(0, 101, 2)}, headers=headers)

        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
            #update created smiley
            self.client.put("/contacts/"+str(id),json={
                "contact_details_id":random.randrange(0, 101, 2),
                "category_id":random.randrange(0, 101, 2),
                "responsible_user_id":random.randrange(0, 101, 2),
                "source_id":random.randrange(0, 101, 2),
                "status":random.randrange(0, 101, 2),
                "visible":random.randrange(0, 101, 2),
                "company_id":random.randrange(0, 101, 2),
                "creator_id":random.randrange(0, 101, 2),
                "client_company_id":random.randrange(0, 101, 2),
                "level":random.randrange(0, 101, 2)
                },headers=headers,name="/contacts/:id")
                
            #delete created smiley
            self.client.delete("/contacts/"+str(id),headers=headers,name="/contacts/:id")

    #Get contact by id
    @task(2)
    def getContact(self):
        response = self.client.get("/contacts/"+str(contact_id),headers=headers)
        
    #Get contact by user
    @task(3)
    def getUserContact(self):
        response = self.client.get("/contacts/user/"+str(user_id),headers=headers)

        
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(3))
     
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
