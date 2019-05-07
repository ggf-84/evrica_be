from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):

        global token, headers, roles, access, accessToken

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTU3ODc1NjQsImV4cCI6MTQ5NTgxMjc2NCwibmJmIjoxNDk1Nzg3NTY0LCJqdGkiOiI4NTkxYTliMzU5MzIwMmY5MWRhYjk4NzNmOWI4NGYwMyJ9.HnxUqh-nvnVlOUHM9vr_FPvmOpxbGUlYYu-PBZ43s3Y"

        #use roles for add action
        roles = [1,2,3,4]
        
        #use access token to get available roles
        access = "b08aff0f1b0e9ef587e6009eefdb9b4b"


        #__________________________________________

        headers = {'Authorization': 'Bearer '+token}
        accessToken = {"Access-Token":access}


    #Generate token for visitors acces
    @task(1)
    def generate(self):
	response = self.client.post("/access/token", json={"rights":roles},headers=headers)

    @task(2)
    def getRights(self):
        response = self.client.get("/access/available",headers=accessToken)

    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))




class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
