my_skills = {
    "html" : "50%",
    "python" : "90%",
    "css" : "20%"
}

# الطريقة العادية ديال التكرار loop
for skill in my_skills:
    print(f" {skill} ↦ {my_skills[skill]}")

print("=" * 20)

# the new and simple methode of loop dictionnary

for skill_key , skill_value in my_skills.items():
    print(f"{skill} ↦ {skill_value}")

# the status of dict in dict:
print("=" * 20)
      
namesskills = {
        "mouhamed" : {
            "python" : "90%",
            "html" : "70%"
        },
        "khalid" : {
            "python" : "20%",
            "html" : "85%"
        }
}
# the better mrthode for loop at dict in dict

for namekey , namevalue in namesskills.items():
    print(f"{namekey} => {namevalue}")
    
    print(">" *10)

    for skillkey , skillvalue in namevalue.items():
        print(f"the skill is {skillkey} progress's => {skillvalue}")