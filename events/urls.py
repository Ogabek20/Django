
from django.urls import path
from . import views

urlpatterns = [
    # Asosiy sahifa + FBV - barcha tadbirlar
    path('', views.event_list, name='event_list'),
    path('events/', views.event_list, name='event_list'),

    # CBV - barcha tadbirlar
    path('events-cbv/', views.EventListView.as_view(), name='event_list_cbv'),

    # Bitta tadbir - dinamik URL
    path('events/<int:id>/', views.event_detail, name='event_detail'),
]
#int (sonlar), str (matn, slayshdan tashqari), slug (harflar-sonlar-defis),