from django.apps import AppConfig
from django.contrib import admin
from .models import complaintdata, admindata


class ProjectConfig(AppConfig):
    name = 'project'

	
admin.site.register(complaintdata)
admin.site.register(admindata)
