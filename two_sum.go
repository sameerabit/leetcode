/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {

	CurrentNode := l1

	l1Numbers := []int{}

	for CurrentNode != nil {
		l1Numbers = append(l1Numbers, CurrentNode.Val)
		CurrentNode = CurrentNode.Next
	}

	l2Numbers := []int{}

	CurrentNodeL2 := l2
	for CurrentNodeL2 != nil {
		l2Numbers = append(l2Numbers, CurrentNodeL2.Val)
		CurrentNodeL2 = CurrentNodeL2.Next
	}

	countL1 := len(l1Numbers)
	countL2 := len(l2Numbers)

	loopingAr := []int{}
	followingAr := []int{}

	if countL1 > countL2 {
		loopingAr = l1Numbers
		followingAr = l2Numbers
	} else {
		loopingAr = l2Numbers
		followingAr = l1Numbers
	}

	i := 0
	j := 0
	b := 0

	head := &ListNode{}

	current := head

	for len(loopingAr) > i {
		total := 0
		if len(followingAr) > j {
			total = loopingAr[i] + followingAr[j] + b
			j = j + 1
		} else {
			total = loopingAr[i] + b
		}
		if total >= 10 {
			total = total - 10
			b = 1
		} else {
			b = 0
		}
		current.Next = &ListNode{Val: total}
		current = current.Next
		i = i + 1
	}

	if b == 1 {
		current.Next = &ListNode{Val: b}
		current = current.Next
	}

	return head.Next
}
