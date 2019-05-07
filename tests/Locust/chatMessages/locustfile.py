from locust import HttpLocust, TaskSet, task
import json, uuid, io, random, string


class UserBehavior(TaskSet):
    def on_start(self):
        
        global token, headers, room, user_id, startInterval, guestToken, guestRoom, guestId, msgAdded

        #---------- Configurations

        #user token
        token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2JhY2suZGV2XC9iYWNrZW5kXC9hcGlcL2F1dGgiLCJpYXQiOjE0OTYyMzM0NjYsImV4cCI6MTQ5NjI1ODY2NiwibmJmIjoxNDk2MjMzNDY2LCJqdGkiOiI2MDdhNWU2Y2YzNTQwOTM0ODc4MDllZTBhNjk1MjQzMiJ9.9USPlxN6lsV_i_w5sNF8nK4TPnmKqO6a-1nbm3D26fQ"
        #room id for test
        room = 45
        user_id = 1
        startInterval = "1485554400"
        guestToken = "6f5c83599d7c456d696ce7b907c3d118"
        guestRoom = 46
        guestId = 13
        #msgAdded = 367
        
        #-------------------------------

        headers = {'Authorization': 'Bearer '+token}
        

    #Add new message
    @task(3)
    def addMsg(self):
	response = self.client.post("/message", json={"room_id":room,"sender":user_id,"message":self.randomString()},headers=headers)
        json.loads(response.content)
        id = json.loads(response.content)["id"]
        
        if int(id) > 0:
        #Update message (Update message if this message is created less than 5 min ago and current user === sender) RoomMessageController.php Line 120
            self.client.put("/message/" + str(id),json={"message":"Updated"},headers=headers, name="/message/?id=[id]")
            
        
    #Get user chat conversation
    @task(1)
    def getConversations(self):
        response = self.client.get("/message/period/"+startInterval+"/"+str(room)+"/"+"1/15", headers=headers)

    #Get guest chat conversation
    @task(1)
    def getGuestConversations(self):
        response = self.client.get("/guest/messages/"+guestToken+"/1/15", headers=headers)

    #Get user chat conversation
    @task(1)
    def getUserConversations(self):
        response = self.client.get("/message/get/"+str(room)+"/1/15", headers=headers)
        
    #Save guest message
    @task(2)
    def saveMessage(self):
        response = self.client.post("/chat/message",json={"room_id":guestRoom,"sender":guestId,"message":self.randomString()})

    #Update message (Update message if this message is created less than 5 min ago and current user === sender) RoomMessageController.php Line 120
    #@task(6)
    #def updateMessage(self):
    #    response = self.client.put("/message/" + str(msgAdded),json={"message":"Updated"},headers=headers, name="/message/?id=[id]")
	
    #Upload file for attachement
    @task(1)
    def uploadFile(self):
	response = self.client.post("/message/upload",files = {'file': ('smile.png', open('smile.png', 'rb'))},data={"room_id":self.randomInt()},headers=headers)
   
    def randomString(self):
	return ''.join(random.choice(string.lowercase) for i in range(10))
     
    def randomInt(self):
	return str(random.randrange(0, 101, 2))
        	
	
class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 19000
