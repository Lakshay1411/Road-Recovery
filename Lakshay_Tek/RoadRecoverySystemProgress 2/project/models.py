from django.db import models


class complaintdata(models.Model):
    name=models.CharField(max_length=20)
    mob=models.IntegerField()
    location=models.CharField(max_length=100)
    imgid=models.CharField(max_length=100)

	
	
class admindata(models.Model):
	usrname=models.CharField(max_length=15)
	password=models.CharField(max_length=20)
	def __str__(self):
		return self.usrname

# Create your models here.
