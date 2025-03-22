#  let's start a few simple exemples about index : 
name="mouhamed"

"but first let's take a look of the stucture of the index : we have [start : stop : step]"
# strat : it mean the index that we want to start from , if we take it empty or when we write 0 , It will strat from the begining
# stop : means the index that we should stop when arrive it , if we take it empty or when we write the len of the string , it will stop at the end
# step : means the number of step that we want to do , if we take it empty or when we write 1 , it will do the step by step

print(name[0]) # it will print the first character (m) of the string
print("-"* 5)

print("let's print the whole string : ")
print(name[::])  # it will print the whole string 
print("-"* 5)

print("let's print the characters from the index 1 to the end ")
print(name[1:]) # it will print the string from the index 1 to the end

print("-" * 5)

print("now let's print the word from the begining to character e ")
print(name[:7]) 
# i think here you will not understand , but remember the counting of the index start from 0 , And if we start to count the 
# word mouhamed the could should be like this print(name[0:6]) because the 6 is the index of the character e but it's just for the index , 
# so to print it we should add 1 to 6 that mean 7 

print("-" * 6)

sentence = "Mouhamed and sarab are friends"
# this line below is for counting the characters in this sentence 
print("the length of the sentence is " , len(sentence)) 
print("-" * 5)

# let's print all the sentence but we make the step = 2 between them :
res=print(sentence[::2])



# i appologize if you don't understand , i don't know how to explain , but you can search in youtub for 'index in python' and you will understand :)
"Dont give up , keeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeep going , if your way is difficult , know that the end it will very good "

