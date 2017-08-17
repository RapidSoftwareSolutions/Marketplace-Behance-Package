[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Behance/functions?utm_source=RapidAPIGitHub_BehanceFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)
# Behance Package
Behance, part of the Adobe family, is the leading online platform to showcase & discover creative work. The creative world updates their work in one place to broadcast it widely and efficiently. Companies explore the work and access talent on a global scale.
* Domain: [behance.net](https://www.behance.net/)
* Credentials: apiKey, clientId

## How to get credentials: 
1. Register on [behance.net](https://www.behance.net/).
2. Create your Application.
3. After creation app, you will receive apiKey / clientId.
 
 ## Custom datatypes:
   |Datatype|Description|Example
   |--------|-----------|----------
   |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
   |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
   |List|Simple array|```["123", "sample"]```
   |Select|String with predefined values|```sample```
   |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Behance.getAllProjects
The getAllProjects endpoints allow you to browse all projects.

| Field      | Type       | Description
|------------|------------|----------
| clientId   | credentials| API client id.
| searchQuery| String     | Free text query string.
| sort       | Select     | The order the results are returned in.
| time       | Select     | Limits the search by time.Options - all,today,week,month.
| field      | String     | Limits the search by creative field.Field name from the list of defined creative fields.
| country    | String     | Limits the search by a 2-letter FIPS country code.
| state      | String     | Limits the search by state or province name.
| city       | String     | Limits the search by city name.
| page       | Number     | The page number of the results, always starting with 1.
| tags       | List       | Limits the search by tags. 
| colorHex   | String     | Limit results to an RGB hex value (without #).
| colorRange | Number     | How closely to match the requested colorHex, in color shades (default:20).
| license    | String     | Filter by creative license. Acronyms found [here](http://creativecommons.org/licenses/).

## Behance.getProject
Get the information and content of a project by projectId.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| API key.
| projectId| String     | Project id on which we will receive data.

## Behance.getProjectComments
Get the comments for a project by projectId.

| Field    | Type       | Description
|----------|------------|----------
| clientId | credentials| API client id.
| projectId| String     | Project id on which we will receive data.
| page     | Number     | The page number of the results, always starting with 1.

## Behance.getAllCreativesToFollow
Provides a list of creatives you might be interested in following.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.

## Behance.getAllCreativeFields
Retrieves all Creative Fields in two groups, all fields (in 'fields') and popular ones (in 'popular').

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.

## Behance.getAllUsers
The getAllUsers endpoints allow you to browse all users.

| Field      | Type       | Description
|------------|------------|----------
| clientId   | credentials| API client id.
| searchQuery| String     | Free text query string.
| sort       | Select     | The order the results are returned in.
| field      | String     | Limits the search by creative field.Field name from the list of defined creative fields.
| country    | String     | Limits the search by a 2-letter FIPS country code.
| state      | String     | Limits the search by state or province name.
| city       | String     | Limits the search by city name.
| page       | Number     | The page number of the results, always starting with 1.
| tags       | List       | Limits the search by tags. 

## Behance.getUserByName
Get basic information about a user by username.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | User name on which we will receive data.

## Behance.getUser
Get basic information about a user by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | User id on which we will receive data.

## Behance.getUserProjects
Get the projects published by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | User id on which we will receive data.
| time    | Select     | Limits the search by time.Options - all,today,week,month.
| sort    | Select     | The order the results are returned in.
| page    | Number     | The page number of the results, always starting with 1.

## Behance.getUserProjectsByUsername
Get the projects published by username.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | User name on which we will receive data.
| time    | Select     | Limits the search by time.Options - all,today,week,month.
| sort    | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| page    | Number     | The page number of the results, always starting with 1.

## Behance.getUserWips
Get the works-in-progress published by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | User id on which we will receive data.
| time    | Select     | Limits the search by time.Options - all,today,week,month.
| sort    | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| page    | Number     | The page number of the results, always starting with 1.

## Behance.getUserWipsByUsername
Get the works-in-progress published by a user by username.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | Username on which we will receive data.
| time    | Select     | Limits the search by time.Options - all,today,week,month.
| sort    | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| page    | Number     | The page number of the results, always starting with 1.

## Behance.getUserAppreciations
Get a list of user's recently appreciated projects by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | UserId on which we will receive data.
| page    | Number     | The page number of the results, always starting with 1.

## Behance.getUserAppreciationsByUsername
Get a list of user's recently appreciated projects by username.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | Username on which we will receive data.
| page    | Number     | The page number of the results, always starting with 1.

## Behance.getUserCollections
Get a list of a user's collections by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | UserId on which we will receive data.
| page    | Number     | The page number of the results, always starting with 1.
| sort    | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| time    | Select     | Limits the search by time.Options - all,today,week,month.

## Behance.getUserCollectionsByUsername
Get a list of a user's collections by username.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | Username on which we will receive data.
| page    | Number     | The page number of the results, always starting with 1.
| sort    | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| time    | Select     | Limits the search by time.Options - all,today,week,month.

## Behance.getUserStats
Get statistics (all-time and today) for a specific user. Includes number of project views, appreciations, comments, and profile views by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | UserId on which we will receive data.

## Behance.getUserStatsByUsername
Get statistics (all-time and today) for a specific user. Includes number of project views, appreciations, comments, and profile views by userName.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | Username on which we will receive data.

## Behance.getUserFollowers
Get a list of creatives who follow the user.

| Field    | Type       | Description
|----------|------------|----------
| clientId | credentials| API client id.
| userId   | String     | UserId on which we will receive data.
| page     | Number     | The page number of the results, always starting with 1.
| sort     | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| sortOrder| Select     | The direction in which the results are returned.Options - ascending,descending.
| perPage  | Number     | The number of results per page.(Max:20)

## Behance.getUserFollowersByUsername
Get a list of creatives who follow the user by username.

| Field    | Type       | Description
|----------|------------|----------
| clientId | credentials| API client id.
| username | String     | Username on which we will receive data.
| page     | Number     | The page number of the results, always starting with 1.
| sort     | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| sortOrder| Select     | The direction in which the results are returned.Options - ascending,descending.
| perPage  | Number     | The number of results per page.(Max:20).

## Behance.getUserFollowing
Get a list of creatives followed by the user by userId.

| Field    | Type       | Description
|----------|------------|----------
| clientId | credentials| API client id.
| userId   | String     | UserId on which we will receive data.
| page     | Number     | The page number of the results, always starting with 1.
| sort     | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| sortOrder| Select     | The direction in which the results are returned.Options - ascending,descending.
| perPage  | Number     | The number of results per page.(Max:20).

## Behance.getUserFollowingByUsername
Get a list of creatives followed by the user by username.

| Field    | Type       | Description
|----------|------------|----------
| clientId | credentials| API client id.
| username | String     | Username on which we will receive data.
| page     | Number     | The page number of the results, always starting with 1.
| sort     | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| sortOrder| Select     | The direction in which the results are returned.Options - ascending,descending.
| perPage  | Number     | The number of results per page.(Max:20).

## Behance.getUserWorkExperience
A list of the user's professional experience by userId.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| userId  | String     | UserId on which we will receive data.

## Behance.getUserWorkExperienceByUsername
A list of the user's professional experience by Username.

| Field   | Type       | Description
|---------|------------|----------
| clientId| credentials| API client id.
| username| String     | UserId on which we will receive data.

## Behance.getAllCollections
The getAllCollections endpoints allow you to browse all collections.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| API key.
| searchQuery| String     | Free text query string.
| sort       | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| time       | Select     | Limits the search by time.Options - all,today,week,month.
| page       | Number     | The page number of the results, always starting with 1.

## Behance.getCollection
Get basic information about a collection.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| API key.
| collectionId| String     | Collection id on which we will receive data.

## Behance.getProjectFromCollection
Get projects from a collection.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| API client id.
| collectionId| String     | Collection id on which we will receive data.
| page        | Number     | The page number of the results, always starting with 1.
| time        | Select     | Limits the search by time.Options - all,today,week,month.
| sort        | Select     | The order the results are returned in.Options - featuredDate,appreciations,views,comments,publishedDate.
| perPage     | Number     | The number of results per page.(Max:20).

