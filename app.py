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
    appendToGeoJSON(pharmacy, "pharmacy", geojson)
    return render_template('table.html', geojson=json.dumps(geojson), tablejson=json.dumps(pharmacy), type='pharmacy')


@app.route("/login")
def login():
    return render_template('login.html')

@app.route("/signup")
def signup():
    return render_template('signup.html')

@app.route("/view/hospital/<id>")
def viewhospital(id):
    with open('hospitals.json') as hospitaljson:
        hospital = json.load(hospitaljson)['data']
    param = {}
    for i in hospital:
        if int(i['id']) is int(id):
            param = i
    
    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']
    param['pharmacy'] = []
    param['labs'] = []



    for j in param['medicalStore']:
        print("j: ",j)
        for i in pharmacy:
            if int(j) == int(i['id']):
                param['pharmacy'].append({
                    "id":i['id'],
                    "name":i['name'],
                    "timing":i['timing']
                })
    for j in param['labcentre']:
        print("j: ",j)
        for i in pharmacy:
            if int(j) == int(i['id']):
                param['labs'].append({
                    "id":i['id'],
                    "name":i['name'],
                    "timing":i['timing']
                })

    param['labcentre']=param['labs']




    geojson = []
    appendToGeoJSON(hospital, "hospital", geojson)
    return render_template('viewhospital.html', geojson=json.dumps(geojson), param=param)



@app.route("/view/clinic/<id>")
def viewclinic(id):
    with open('clinics.json') as clinicjson:
        clinic = json.load(clinicjson)['data']
    param = {}
    for i in clinic:
        if int(i['id']) is int(id):
            param = i
    
    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']
    param['pharmacy'] = []
    param['labs'] = []



    for j in param['medicalStore']:
        print("j: ",j)
        for i in pharmacy:
            if int(j) == int(i['id']):
                param['pharmacy'].append({
                    "id":i['id'],
                    "name":i['name'],
                    "timing":i['timing']
                })
    for j in param['labcentre']:
        print("j: ",j)
        for i in pharmacy:
            if int(j) == int(i['id']):
                param['labs'].append({
                    "id":i['id'],
                    "name":i['name'],
                    "timing":i['timing']
                })

    param['labcentre']=param['labs']




    geojson = []
    appendToGeoJSON(clinic, "clinic", geojson)
    return render_template('viewclinic.html', geojson=json.dumps(geojson), param=param)



@app.route("/view/labcentre/<id>")
def viewlabcentre(id):
    with open('labcentre.json') as labcentrejson:
        labcentre = json.load(labcentrejson)['data']
    param = {}
    for i in labcentre:
        if int(i['id']) is int(id):
            param = i
    
    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']
    param['pharmacy'] = []



    for j in param['medicalStore']:
        print("j: ",j)
        for i in pharmacy:
            if int(j) == int(i['id']):
                param['pharmacy'].append({
                    "id":i['id'],
                    "name":i['name'],
                    "timing":i['timing']
                })
    




    geojson = []
    appendToGeoJSON(labcentre, "labcentre", geojson)
    return render_template('viewlabcentre.html', geojson=json.dumps(geojson), param=param)


@app.route("/view/pharmacy/<id>")
def viewpharmacy(id):
    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']
    param = {}
    for i in pharmacy:
        if int(i['id']) is int(id):
            param = i

    with open('pharmacy.json') as pharmacyjson:
        pharmacy = json.load(pharmacyjson)['data']


    geojson = []
    appendToGeoJSON(pharmacy, "pharmacy", geojson)
    return render_template('viewpharmacy.html', geojson=json.dumps(geojson), param=param)



app.run(debug=True)
