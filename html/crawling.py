data = [0]

for i in range(20):
    temp = input().split('d/')
    temp = temp[1].split('/view')
    temp = temp[0]
    data.append(temp)


for i in range(1,21):
    print("Unit{} : ['{}'],".format(i,data[i]))

