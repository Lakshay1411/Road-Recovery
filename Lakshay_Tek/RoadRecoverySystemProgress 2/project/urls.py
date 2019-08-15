from django.conf.urls import url
from . import views

urlpatterns=[
	url(r'^$', views.index,name='index'),
	url(r'^user/',views.user,name='user'),
	url(r'^admins/',views.admins,name='admin'),
	url(r'^login/',views.login,name='login'),
	url(r'^mains/',views.mains,name='login'),
	url(r'^mains/',views.mains,name='login'),
	
]
