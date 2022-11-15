The file attached, db.txt, is for PENN STATE ABINGTON CAMPUS. If you would like to change this for another Penn State campus, create a new file and change the variable "filepath" to the name of your file in quotes.

The file must have each line in a specific format. Start with a small code using m or f for the gender assigned to the room listings, a number for the floor (if applicable), and the final letter representing the number of people for your one bedroom (s=single). If a room can be either gender, it is placed in both dictionaries. If a Living Learning Community is selected, insert "ll" and a letter representing the LLC after the gender.

**IF THERE DOES NOT EXIST A LIVING LEARNING COMMUNITY FOR THE OTHER PENN STATE CAMPUS MENTIONED, INSERT THE FOLLOWING LINES:<br>**
*mll;{}<br>
fll;{}<br>*
**THESE LINES ACT AS A PLACEHOLDER FOR LLC IN THE EVENT SUCH A PLACE DOES NOT EXIST.**

Follow this string by a semicolon, then the list of rooms and who's occupying them in squiggly brackets. Each entry within the brackets is separated by commas. The entry must be a room number, followed by the list of bedrooms and who occupies them. For single-occupant bedrooms, the name or ID can be given. Otherwise, give a list of bedroom occupants in square brackets [] after the room section. The term None is used as a placeholder.

Examples below for empty rooms:
m1s;{112:{a:None},113:{b:None,c:None}}
f1s;{112:{a:None}}
m1d;{101:{a:[None,None],b:[None,None]},102:{a:[None,None],b:[None,None]},106:{a:[None,None],b:[None,None],c:[None,None]},108:{a:[None,None],b:[None,None],c:[None,None]},110:{a:[None,None],b:[None,None],c:[None,None]},114:{a:[None,None],b:[None,None],c:[None,None]}}
f1d;{103:{a:[None,None],b:[None,None]},104:{a:[None,None],b:[None,None]},105:{a:[None,None],b:[None,None]},107:{a:[None,None],b:[None,None],c:[None,None]},109:{a:[None,None],b:[None,None]},113:{a:[None,None]}}
mllrs;{6:{a:None},7:{a:None,b:None}}
