
from django.shortcuts import render, get_object_or_404
from django.views.generic import ListView
from .models import Event


# Function-based view
def event_list(request):
    events = Event.objects.all()

    return render(request, 'events/event_list.html', {
        'events': events
    })


# Class-based view
class EventListView(ListView):
    model = Event
    template_name = 'events/event_list.html'
    context_object_name = 'events'


# Detail view
def event_detail(request, id):
    event = get_object_or_404(Event, id=id)

    return render(request, 'events/event_detail.html', {
        'event': event
    })
