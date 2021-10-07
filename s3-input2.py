import boto3

session = boto3.Session(
aws_access_key_id='ASIA5YHMCO2YO4JRZWUU',
aws_secret_access_key='0wCfg1suKMo5LHAymke5CRneiC3gt1hD7RtO6WuQ'
)

s3 = session.resource('s3')

for bucket in s3.buckets.all():
    print(bucket.name)
    
# Upload a new file
data = open('data.txt', 'rb')
s3.Bucket('349-db-backup').put_object(Key='data.txt', Body=data)
