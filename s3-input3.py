import boto3

# Version 1

session = boto3.Session(profile_name='default')

s3 = session.resource('s3')

for bucket in s3.buckets.all():
    print(bucket.name)
    
# Upload a new file
data = open('data.txt', 'rb')
s3.Bucket('349-db-backup').put_object(Key='data.txt', Body=data)
