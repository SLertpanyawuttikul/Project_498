from django.http import HttpResponseBadRequest
from django.shortcuts import render
def home(request):
    context={
        'usuername':'NNN',
        'password':'1234',
    }
    return render(request,'home\home.html',context=context)
def game(request):
    return render(request,'dragon\sample.html')
# Create your views here.
