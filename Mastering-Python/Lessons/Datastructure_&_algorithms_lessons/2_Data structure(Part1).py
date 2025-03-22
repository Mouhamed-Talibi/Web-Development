"arrays"
note = " Python does not have built-in support for Arrays, but Python Lists can be used instead."

arr = ["mouhamed", "achraf", 4, 15.89 , "karim", True]
arr.append("said")
print(arr)
arr.pop(4)
print(arr)
arr.extend("badr")
print(arr)
arr.insert(3, 56)
print(arr)
arr.count(7)
print(arr)
arr.index(56)
print(arr)
arr.remove("mouhamed")
print(arr)
arr.clear()
print(arr)

print("=" * 24)
# ------------------------------------------------------------------------------------

"linked list"
class listNode:
    def __init__(self, data):
        self.data = data 
        self.next = None

class linkedlist:
    def __init__(self):
        self.head = None 
     
    # for insertion to linked list
    def insertat_begain(self, data):
        new_node = listNode(data)
        if self.head is None:
            self.head = new_node
            return 
        else:
            new_node.next = self.head
            self.head = new_node 

    def insertatIndex(self, data, index):
        new_node = listNode(data)
        position = 0
        current_node = self.head
        if position == index:
            self.insertat_begain(data)
        else:
            while(current_node != None and position + 1 != index):
                position += 1
                current_node = current_node.next 

            if current_node != None:
                new_node.next = current_node.next
                current_node.next = new_node
            else:
                print("index not Present !!")

    def insertat_end(self, data):
        new_node = listNode(data)
        if self.head is None:
            self.head = new_node
            return
        current_node = self.head

        while (current_node.next):
            current_node = current_node.next
        current_node.next = new_node 

    # for update and delete from linked list:
    def updatenode(self, value, index):
        current_node = self.head
        counter = 0
        if counter == index:
            current_node.data = value
        else:
            while(current_node != None and counter != index):
                counter +=1 
                current_node = current_node.next

            if current_node != None:
                current_node.data = value
            else:
                print("index Not Present !!")

    def remove_first_node(self):
        if self.head == None:
            return 
        self.head = self.head.next

    def remove_last_node(self):
        if self.head is None:
            return
        current_node = self.head
        while (current_node.next.next):
            current_node = current_node.next
        current_node.next = None

    def remvove_at_index(self, index):
        if self.head is None:
            return
        
        current_node = self.head
        counter = 0
        if counter == index:
            self.remove_first_node()
        while (current_node != None and counter + 1 != index):
            counter +=1 
            current_node = current_node.next 
        if current_node != None:
            current_node.next = current_node.next.next
        else:
            print("Index Not Present !!")

    def remove_at_data(self, data):
        current_node = self.head
        if current_node.data == data : 
            self.remove_first_node()
            return 
        while current_node is not None and current_node.next.data != data:
            current_node = current_node.next
        if current_node == None:
            return
        else:
            current_node.next = current_node.next.next 

    # get size of linked list:
    def get_size(self):
        size = 0
        if (self.head):
            current_node = self.head
            while (current_node):
                size += 1
                current_node = current_node.next
                return f"the size if the linked list is : {size}"
        else:
            return "the size of linked list is : 0"
        
    def printll(self):
        current_node = self.head 
        while (current_node):
            print(current_node.data)
            current_node = current_node.next 

        
use = linkedlist()
use.insertat_begain("ahmed")
use.insertat_end("mouhamed")
use.insertatIndex("achraf", 2)
print("linked data :")
use.printll()
print("=" * 12)
print("remove first node :")
use.remove_first_node()
use.printll()
print("=" * 12)
print("remove node at data (mouhamed) :")
use.remove_at_data("mouhamed")
print("linked data :")
use.printll()
print("=" * 12)
print("updating data :")
use.updatenode("RajaCasablanca", 3)
print("linked list data :")
use.printll()
print("=" * 12)
print("size of linked list :")
print(use.get_size())
print("-" * 25)
# ------------------------------------------------------------------------------------------

"stack implmentation using array"
stack = []
# pusing elements on the stack :
stack.append("achraf")
stack.append("karim")
stack.append("khalid")
stack.append("mouhamed")

print(f"stack after pushing : {stack}")


# poping from stack
stack.pop()
stack.pop()
print(f"stack after poping : {stack}")
print("=" * 24)

# --------------------------------------------------------
"class stack using array"
class Stack:
    def __init__(self, capacity):
        self.stack = [None] * capacity
        self.capacity = capacity
        self.top = -1

    def push(self , data):
        if self.top == self.capacity - 1:
            print("Stack Overflow !")
            return 
        self.top + 1
        self.stack[self.top] = data 

    def pop(self):
        if self.top == -1:
            print("Stack underflow !")
            return None 
        popped_data = self.stack[self.top]
        self.top - 1
        return popped_data 
    
    def peek(self):
        if self.top == -1:
            print("stack is Empty :) ")
            return None
        return self.stack[self.top]
    
    def is_empty(self):
        return self.top == -1
    
    def size(self): 
        return self.top + 1
    
ex = Stack(6)
ex = Stack(5)
ex.push(10)
ex.push(20)
ex.push(30)

print("Top element:", ex.peek())
print("Stack size:", ex.size())

popped_item = ex.pop()
print("Popped element:", popped_item)
print("Stack size after pop:", ex.size()) 
print("="  * 24)

# -----------------------------------------------------------------------------------------

"queue data structure"

# class queue using array :
class queue:
    def __init__(self, capacity) -> int :
        self.capacity = capacity 
        self.queue = [None] * capacity 
        self.front = 0
        self.rear = 0

    def Enqueue(self, data):
        if self.rear == self.capacity:
            print("queue is Full, cannot enqueue more data !")
            return 
        else:
            self.queue[self.rear] =data
            self.rear += 1

    def Dequeue(self):
        if self.rear == self.front :
            print("The queue is Empty, Nothing to Dequeue !")
            return 
        else:
            removed_element = self.queue[self.front]
            self.front += 1
            return f"the removed element is : => {removed_element }"
        
    def Display(self):
        if self.rear == self.front :
            print("Queue is Empty , Nothing to Display !")
            return
        else:
            print("Queue Elements :")
            for x in range(self.front , self.rear):
                print(self.queue[x], end = " => ") 

    def get_front(self):
        if self.rear == self.front:
            print("Queue is Empty !")
            return None 
        else:
            return self.queue[self.front] 

exemple = queue(5)
exemple.Enqueue("ahmed")
exemple.Enqueue("yassin")
exemple.Display()
print("\n")
exemple.Enqueue("karim")
exemple.Enqueue("abdo")
exemple.Display()
exemple.Dequeue()
exemple.Dequeue()
print("After Dequeueding the Queue :")
exemple.Display()
print("\n", "-" * 24)

# --------------------------------------------------------------------
"implementation of queue using linked list"
class Node:
    def __init__(self, data) :
        self.data = data 
        self.next = None 

class queue:
    def __init__(self):
        self.front = None
        self.rear  = None 

    def Enqueue(self, data):
        new_node = Node(data)
        if self.front is None :
            self.front = self.rear = new_node
        else:
            self.rear.next = new_node 
            self.rear  = new_node  

    def Dequeue(self):
        if self.front is None:
            print("Queue is Empty, cannot Dequeue !")
            return
        else:
            rem_ele = self.front.data 
            self.front = self.front.next 
            return f"the removed element is  => {rem_ele} "
        
    def Display(self):
        current_node = self.front
        print("Queue elements : ") 
        while current_node :
            print(current_node.data, end = " -> ") 
            current_node = current_node.next 
        print()

q = queue()
q.Enqueue("achraf")
q.Enqueue("ahmed") 
q.Enqueue("yassin")
print("Queue after Adding Data : \n")
q.Display()
print("Front Element :", q.front.data) 
q.Dequeue()
print("Queue after Dequeue : ")
print("Dequeued Elment : ", q.Dequeue())
q.Display()



