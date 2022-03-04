Main1 = os.date"23"
Main2 = os.date"59"
Main3 = os.date"59"

date1 = os.date"%I",os.time()+7*60*60
date2 = os.date"%M",os.time()+7*60*60
date3 = os.date"%S",os.time()+7*60*60

hrs=Main1-date1
mns=Main2-date2
sns=Main3-date3
print("Expired in: "..hrs.."h:"..mns.."m:"..sns.."s")
