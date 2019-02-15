import os
import json
from PIL import Image, ImageDraw, ImageFont


def the_name(data):
	sizee = 150
	if len(data)>12:
		sizee= sizee - (120)
	fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-R.ttf', sizee)
	return str(len(data))
	return "ss"+data

# for filename in os.listdir(os.getcwd()):
    # print(filename)
    # im = Image.open(filename)
    # im.show()
    # break
# f = open('../Scripts/div1.json', 'r')
absolute_json_file_path = '../Scripts/div1.json'
with open(absolute_json_file_path, encoding='utf-8-sig') as json_file:
    text = json_file.read()
    json_data = json.loads(text)
    for data in json_data:
        img_name = data['ID No.']
        img_name = img_name.replace("/", "_").lower()
        maxsize = 375, 282
        im = Image.open("../Pics/div2/"+img_name+".jpg")
        rate1 = 150/im.width
        rate2 = 150/im.height
        # im = im.resize((int(im.width * 2), int(im.height * rate2)))
        im = im.resize((int(im.width * rate1), int(im.height * rate2)))
        background = Image.open("../Pics/oooo.png")
        # background = Image.open("../Pics/div.jpg")
        d = ImageDraw.Draw(background)
        # fnt2 = ImageFont.truetype('../../../Documents/Templates/Fonts/Long_Shot.ttf', 100)
        name = data['NAME']
        # name = str(len(data['NAME']))
        sizee = 150	 - len(data['NAME'])
        fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-R.ttf', sizee)
        # fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-R.ttf', 150)
        fnt2 = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-B.ttf', 100)
        d.text((28,150), name,font=fnt, fill=(0, 11, 0))
        d.text((500,500), data['ID No.'], font=fnt2, fill=(0, 51, 0))
        offset = (28,100)
        background.paste(im, offset)
        background.show()
        # background.save('../Pics/Final/Div1/'+img_name+".jpg")
        break



# import os
# import json
# from PIL import Image, ImageDraw, ImageFont


# def the_name(data):
#     sizee = 150
#     if len(data)>12:
#         sizee= sizee - (120)
#     fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-R.ttf', sizee)
#     return str(len(data))
#     return "ss"+data

# for filename in os.listdir(os.getcwd()):
    # print(filename)
    # im = Image.open(filename)
    # im.show()
    # break
# f = open('../Scripts/div1.json', 'r')
# absolute_json_file_path = '../Scripts/div1.json'
# with open(absolute_json_file_path, encoding='utf-8-sig') as json_file:
#     text = json_file.read()
#     json_data = json.loads(text)
#     for data in json_data:
#         img_name = data['ID No.']
#         img_name = img_name.replace("/", "_").lower()
#         maxsize = 375, 282
#         im = Image.open("../Pics/div2/"+img_name+".jpg")
#         rate1 = 375/im.width
#         rate2 = 282/im.height
#         im = im.resize((int(im.width * rate1), int(im.height * rate2)))
#         background = Image.open("../Pics/ppp.png")
#         # background = Image.open("../Pics/div.jpg")
#         d = ImageDraw.Draw(background)
#         # fnt2 = ImageFont.truetype('../../../Documents/Templates/Fonts/Long_Shot.ttf', 100)
#         name = data['NAME']
#         # name = str(len(data['NAME']))
#         sizee = 150  - len(data['NAME'])
#         fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-R.ttf', sizee)
#         # fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-R.ttf', 150)
#         fnt2 = ImageFont.truetype('../../../Documents/Templates/Fonts/fonts/truetype/ubuntu/UbuntuMono-B.ttf', 100)
#         d.text((470,300), name,font=fnt, fill=(0, 51, 0))
#         d.text((500,500), data['ID No.'], font=fnt2, fill=(0, 51, 0))
#         offset = (28,300)
#         background.paste(im, offset)
#         background.show()
#         # background.save('../Pics/Final/Div1/'+img_name+".jpg")
#         break

