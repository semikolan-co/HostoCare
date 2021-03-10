from flask import Flask, render_template
import json
import geocoder
g = geocoder.ip('me')
print(g.latlng)
app = Flask(__name__)







# geojson = {
#     'type': 'FeatureCollection',
#     'features': [
#         {
#             'type': 'Feature',
#             'properties': {
#                 'id': 2,
#                 'type': 'hospital',
#                 'name': 'Some Random NAme'
#             },
#             'geometry': {
#                 'type': 'Point',
#                 'coordinates': [77.482181, 23.241662]
#             }
        
#         }
#     ]
# }

def appendToGeoJSON(array,type,to):
    for i in array:
        item = {
            'type': 'Feature',
            'properties': {
                    'id': i['id'],
                    'type': type,
                    'name': i['name']
            },
            'geometry': {
                'type': 'Point',
                'coordinates': [i['long'], i['lat']]
            }

        }
        to.append(item)


@app.route("/")
def index():
    return render_template('index.html')


@app.route("/search")
def search():
   
    with open('hospitals.json') as hospitaljson:
        hospitals = json.load(hospitaljson)['data']

    with open('clinics.json') as clinicjson:
        clinics = json.load(clinicjson)['data']

    with open('labcentre.json') as labcentrejson:
        labcentres = json.load(labcentrejson)['data']

    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']




    geojson = []

    appendToGeoJSON(hospitals,"hospital",geojson)
    appendToGeoJSON(clinics,"clinic",geojson)
    appendToGeoJSON(labcentres,"labcentre",geojson)
    appendToGeoJSON(pharmacy,"pharmacy",geojson)

    return render_template('search.html', geojson=json.dumps(geojson))


@app.route("/hospitals")
def hospitals():
    with open('hospitals.json') as hospitaljson:
        hospitals = json.load(hospitaljson)['data']
    geojson = []
    appendToGeoJSON(hospitals,"hospital",geojson)
    return render_template('table.html', geojson=json.dumps(geojson),tablejson=json.dumps(hospitals),type ='hospital')


@app.route("/clinics")
def clinics():
    with open('clinics.json') as clinicjson:
        clinics = json.load(clinicjson)['data']
    geojson = []
    appendToGeoJSON(clinics,"clinic",geojson)
    return render_template('table.html', geojson=json.dumps(geojson),tablejson=json.dumps(clinics),type ='clinic')


@app.route("/labcentre")
def labcentres():
    with open('labcentre.json') as labcentrejson:
        labcentres = json.load(labcentrejson)['data']
    geojson = []
    appendToGeoJSON(labcentres,"labcentre",geojson)
    return render_template('table.html', geojson=json.dumps(geojson),tablejson=json.dumps(labcentres),type ='labcentre')


@app.route("/pharmacy")
def pharmacy():
    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']
    geojson = []
    appendToGeoJSON(pharmacy,"pharmacy",geojson)
    return render_template('table.html', geojson=json.dumps(geojson),tablejson=json.dumps(pharmacy),type ='pharmacy')


app.run(debug=True)
