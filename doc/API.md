# API

We use a REST API in order to retrieve some informations on the website.

## jobs

``/api/job-list``: returns a list of objects corresponding to a job with the fields correponding to the job's details

    [
        {
            "availableSeats": "10"
            "caracteristicsAction": "9"
            "caracteristicsAnalytic": "7"
            "caracteristicsLeadership": "10"
            "caracteristicsTechnophile": "3"
            "category": "cat"
            "contractDuration": "365"
            "contractType": "cdd"
            "description": "desc1"
            "id": "1"
            "prerequisiteAge": "pre2"
            "prerequisiteEducation": "pre3"
            "prerequisiteTemper": "pre1"
            "rank": "officier"
            "rankDescription": "officier c'est ça"
            "salary": "423000"
            "title": "title1"
        },
        {
            ...
        }
    ]

``/api/job-list/{id}``: returns an object corresponding to a job with the fields correponding to the job's details

    {
        "availableSeats": "10"
        "caracteristicsAction": "9"
        "caracteristicsAnalytic": "7"
        "caracteristicsLeadership": "10"
        "caracteristicsTechnophile": "3"
        "category": "cat"
        "contractDuration": "365"
        "contractType": "cdd"
        "description": "desc1"
        "id": "1"
        "prerequisiteAge": "pre2"
        "prerequisiteEducation": "pre3"
        "prerequisiteTemper": "pre1"
        "rank": "officier"
        "rankDescription": "officier c'est ça"
        "salary": "423000"
        "title": "title1"
    }
   
## news

todo