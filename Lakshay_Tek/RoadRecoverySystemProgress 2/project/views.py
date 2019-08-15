from django.shortcuts import render
from django.http import HttpResponse
from django.views.decorators.csrf import csrf_exempt,csrf_protect
from .models import admindata, complaintdata
from django.contrib.auth.models import User

def index(request):
 	return render(request,'project/index.html',{})

def user(request):
 	return render(request,'project/user.html',{})

def admins(request):
 	return render(request,'project/login.html',{})

def mains(request):
 	return render(request,'project/mains.html',{})
	
def mains(request):
	first={}
	second={}
	dbb=complaintdata.objects.all()
	for i in dbb:
		first={i.id:i.imgid}
		second.update(first)
 	return render(request,'project/mains.html',second)

@csrf_exempt
def login(request):
	k=0
	if(request.POST):
		print(request.POST)
		usrname=request.POST.get('usrname')
		passwrd=request.POST.get('pass')

		for j in admindata.objects.all():
			if(usrname==j.usrname and passwrd==j.password):
				print('found')
				k=1
				break;
	if(k==1):
		return HttpResponse('success')
	if(k==0):
		return HttpResponse('no')