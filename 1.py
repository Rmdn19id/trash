import requests
mmk = raw_input("Masukan sitenya?: ")
kntl = requests.get('https://api.hackertarget.com/reverseiplookup/?q=' + mmk)
print "Hasil:\n",kntl.content
