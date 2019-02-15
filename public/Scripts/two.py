import os
import json
from PIL import Image, ImageDraw, ImageFont

# for filename in os.listdir(os.getcwd()):
    # os.rename(filename, filename.replace(" ", "").lower())

absolute_json_file_path = '../Scripts/div2.json'
with open(absolute_json_file_path, encoding='utf-8-sig') as json_file:
    text = json_file.read()
    json_data = json.loads(text)
    for data in json_data:
        img_name = data['Phone']
        img_name = img_name.replace(" ", "").lower()
        maxsize = 375, 282
        im = Image.open(img_name+".jpg")
        rate1 = 375/im.width
        rate2 = 282/im.height
        im = im.resize((int(im.width * rate1), int(im.height * rate2)))
        background = Image.open("../Pics/div.jpg")
        d = ImageDraw.Draw(background)
        fnt = ImageFont.truetype('../../../Documents/Templates/Fonts/Long_Shot.ttf', 150)
        fnt2 = ImageFont.truetype('../../../Documents/Templates/Fonts/Long_Shot.ttf', 100)
        d.text((470,300), data['Name'],font=fnt, fill=(0, 51, 0))
        # d.text((600,500), data['ID No.'], font=fnt2, fill=(0, 51, 0))
        offset = (28,300)
        background.paste(im, offset)
        # background.show()
        background.save('../Pics/Final/Div2/'+img_name+".jpg")
        # break