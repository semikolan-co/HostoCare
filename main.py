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
    def appendToGeoJSON(array,type):
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
            geojson.append(item)

    appendToGeoJSON(hospitals,"hospital")
    appendToGeoJSON(clinics,"clinic")
    appendToGeoJSON(labcentres,"labcentre")
    appendToGeoJSON(pharmacy,"pharmacy")

    return render_template('search.html', geojson=json.dumps(geojson))

@app.route("/hospitals")
def hospitals():

    with open('hospitals.json') as hospitaljson:
        hospitals = json.load(hospitaljson)['data']

    geojson = []
    def appendToGeoJSON(array,type):
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
            geojson.append(item)

    appendToGeoJSON(hospitals,"hospital")

    return render_template('table.html', geojson=json.dumps(geojson),tablejson=json.dumps(hospitals),type ='hospital')


app.run(debug=True)
