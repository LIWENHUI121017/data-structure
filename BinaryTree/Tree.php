<?php

namespace BinaryTree;
// 二叉链表节点
class Tree
{
    public $data;//头结点
    public $left = null;
    public $right = null;

    public function __construct($data)
    {
        $this->data = $data;
    }


}
/**
 * 前序遍历
 * 如果二叉树为空，则返回空，否则从根节点开始，先遍历左子树，再遍历右子树：
 * @param Tree $tree
 */
function preOrderTraversal($tree){
    if ($tree == null) {
        return;
    }
    printf("%s\n",$tree->data);
    preOrderTraversal($tree->left);
    preOrderTraversal($tree->right);
}
/**
 * 中序遍历
 * 如果二叉树为空，则返回空，然后从左到右依次遍历左子树，真正的根节点，最后是右子树（依然是从最左侧节点开始从左到右的顺序遍历）：
 * @param Tree $tree
 */
function midOrderTraversal($tree){
    if ($tree == null) {
        return;
    }
    midOrderTraversal($tree->left);
    printf("%s\n",$tree->data);
    midOrderTraversal($tree->right);
}
/**
 * 后序遍历
 * 如果二叉树为空，则返回空，否则还是从左子树最左侧的节点开始，先遍历完叶子节点，再遍历父节点，遍历完左子树后，直接从右子树最左侧节点开始，按照和左子树同样的顺序遍历完右子树，最后访问根节点：
 * @param Tree $tree
 */
function postOrderTraversal($tree){
    if ($tree == null) {
        return;
    }
    postOrderTraversal($tree->left);
    postOrderTraversal($tree->right);
    printf("%s\n",$tree->data);
}
$Node1 = new Tree('A');
$Node2 = new Tree('B');
$Node3 = new Tree('C');
$Node4 = new Tree('D');
$Node1->left = $Node2;
$Node1->right = $Node3;
$Node2->right = $Node4;
preOrderTraversal($Node1);
printf("==============\n");
midOrderTraversal($Node1);
printf("==============\n");
postOrderTraversal($Node1);
