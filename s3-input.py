import boto3

s3 = boto3.resource('s3')
for bucket in s3.buckets.all():
    print(bucket.name)
    
# Upload a new file
data = open('data.txt', 'rb')
s3.Bucket('349-db-backup').put_object(Key='data.txt', Body=data)