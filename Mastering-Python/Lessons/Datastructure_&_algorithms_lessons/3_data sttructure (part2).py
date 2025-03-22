"hashing data structure"

hash_table = [[] for _ in range(13)]

def hashing(keydata):
    return keydata % len(hash_table) 

def insert(hash_table, keydata, id, name):
    hash_key = hashing(keydata) 
    hash_table[hash_key].append(f"{id , name }" )
    
def Display_hash(hash_table):
    for x in range(len(hash_table)):
        print(x, end = " ")
        for y in hash_table[x]:
            print("-->", end = " ")
            print(y, end = " ")
        print()
        
insert(hash_table , 78172,45,  "akram" )
insert(hash_table, 324,6,  "ahmed")
insert(hash_table, 2, 56, "mouhamed")
insert(hash_table, 45126, 24, "nouH")
insert(hash_table, 145,89,  "yassin")

Display_hash(hash_table)
print(78172 % 13)
print(45126 % 13)
print("--" * 24)

# --------------------------------------------------------------------------------------------------------------------------------------------
"binarysearchtree vlaue strcuture : "
class binarybinarysearch_tree:
    def __init__(self, data):
        self.data = data 
        self.left = None
        self.right = None 
        
def printcurrentlevel(root, level):
    if root is None: return 
    if level == 1 :
        print(root.data, "->",  end = " ")
    elif level > 1:
        printcurrentlevel(root.left , level - 1 )
        printcurrentlevel(root.right , level - 1)
        
def height(node):
    if node is None : return 0
    else:
        left_height = height(node.left)
        right_height = height(node.right)
        return max(left_height, right_height) + 1
    
def printlevelorder(root):
    h = height(root)
    for x in range(1, h + 1):
        printcurrentlevel(root , x )
        
root = binarybinarysearch_tree(11)
root.left = binarybinarysearch_tree(7)
root.right = binarybinarysearch_tree(3)
root.left.left = binarybinarysearch_tree(2)
root.right.right = binarybinarysearch_tree(5)
root.left.left.left = binarybinarysearch_tree(1)
root.right.right.right = binarybinarysearch_tree(0)
print("the height of this binarysearchtree i a-->> ", height(root))
print("level one is : ") 
printcurrentlevel(root , level= 1), print("\n")
print("level two is : ") 
printcurrentlevel(root, level= 2), print("\n")
print("level three is : ") 
printcurrentlevel(root , level = 3), print("\n")
print("level foor is : ") 
printcurrentlevel(root, level = 4)
print("\n")
print("the level order tarversy of this linked list : ")
printlevelorder(root)
print("\n", "--" * 24)
# ------------------------------------------------------------------

"Binary binarysearch_tree vlaue strcuture"
# binary binarysearchtree vlaue structure is a binarysearchtree o atwo children no more , and any child has two child ...

class binarysearch_tree: 
  
    def __init__(node, data): 
        node.data = data  
        node.left = None
        node.right = None
    
    def Inorder( node, Root ): 
        if( Root is None ): 
            return
        node.Inorder(Root.left) 
        print(Root.data,end = ' ') 
        node.Inorder(Root.right) 
  
    def Insert(node, data): 
        if node is None: 
            node = binarysearch_tree(data)
        elif data < node.data:
            if node.left is None:
                node.left = binarysearch_tree(data)
            else:
               node.left.Insert(data) 
        else:
            if node.right is None:
                node.right = binarysearch_tree(data) 
            else:
                node.right.Insert(data)

    def Delete(node,current, data): 
        if data < node.data:
            current = node
            node.left.Delete(current,data)
        elif(data > node.data):
            current = node
            node.right.Delete(current, data)
            
        else:
            if (node.left is None and node.right is None):
                if(current.left == node):
                    current.left = None
                else:
                    current.right = None
                node = None
        
            elif node.right is None :
                if(current.left == node):
                    current.left = node.left
                else:
                    current.right = node.left
                node = None
    
            elif node.left is None :
                if(current.left == node):
                    current.left = node.right
                else:
                    current.right = node.right
                node = None
                
            else:
                current = node.right
                while(current.left is not None):
                    current = current.left 
                node.data = current.data
                node.right.Delete(current,current.data)   
Root = binarysearch_tree(6 )
Root.Insert(4) 
Root.Insert(2) 
Root.Insert(5) 
Root.Insert(9) 
Root.Insert(8) 
Root.Insert( 10) 
  
print ("Inorder traversal after insertion: ",end = '')
Root.Inorder(Root) 

Root.Delete(Root, 2) 
print ('\n 2 is deleted: ',end ='')
Root.Inorder(Root) 
  
Root.Delete(Root, 4) 
print ('\n 4 is deleted: ',end ='')
Root.Inorder(Root) 
  
Root.Delete(Root, 6) 
print ('\n 6 is deleted: ',end ='')
Root.Inorder(Root)
                    
            