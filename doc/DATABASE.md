# Database

## users

Contains the list of all users, their password hash and status (admin or user).

- id
- username
- password_hash: a blowfish hash
- is_admin: true for an admin, false for a normal user

## news

Contains all news articles, with category and date of creation.

- id
- title
- content: some html content created with a WYSIWYG editor
- category
- creation_date

## jobs

Contains all jobs and their informations concerning prerequisites and modalities.

- id
- title
- description
- category
- available_seats: number of available seats for the job
- salary: starting salary, in **centimes**
- contract_type: CDI ou CDD
- contract_duration: -1 if no duration is specified, else the duration in **days**
- rank: place in the hierarchy
- rank_description
- prerequisites_temper: the temper required by the profession
- prerequisites_age: the age required by the profession
- prerequisites_education: the education level required by the profession
- caracteristics_action: a number between 0 and 10 corresponding to the importance of the prerequisite
- caracteristics_leadership: a number between 0 and 10 corresponding to the importance of the prerequisite
- caracteristics_analytic: a number between 0 and 10 corresponding to the importance of the prerequisite
- caracteristics_technophile: a number between 0 and 10 corresponding to the importance of the prerequisite
