# LMS 4 Labs - Moodle Block

The idea behind the Moodle block is to give an entry point for Moodle classes to
be able to use Remote Labs from their classes.

## Installation

### Automatic Installation
To install this block with Git, you should:

1. Go to `your-moodle-installation/blocks`

2. `git clone THIS-URL lms4labs`

That creates a `lms4labs` in your Moodle folder. You're done!

### Manual Installation

1. Download the block here.

2. Unzip it in `your-moodle-installation/blocks`

3. Rename the folder to `lms4labs`.

You are done.

Simple, right?


## Block Functions & API

### Courses

The installation will setup a `lists.php` function that will be queried from the
RLMS to give permission to specific courses to specific labs.

This will respond with the following JSON:

* `start`: The start index of the list. An integer.
* `number`: The total number of courses. An integer.
* `per-page`: The number of courses per page on each response. Integer
* `courses`: An array of `Courses` objects. Each course object will have an `id`
which is the ID of the course in the Moodle database, and a `name` which is the
name of the course in the Moodle DB.

Here is an example of a response:

```json
start: 4,
number: 50,
per-page: 10,
courses: [
  {id: 3, name: 'Informática para máquinas'},
  {id: 4, name: 'Información sobre lo que siempre quisiste saber sin saber.'}
]
```


















