<?php
function trans($s) {
	$translate = array(
		'home' => '主页',
		'problems' => '题目',
		'submit' => '提交',
		'status' => '评测结果',
		'welcome to mini-oj' => '欢迎使用Mini-OJ',
		'this is a mini-oj devloped by acm iwg. enjoy it!' => '这只是一个测试版本...',
		'sign in now to take the exam!' => '现在登录来参加考试！',
		'sign in now' => '现在登录',
		'here will show some test rules for the students.' => '这里将显示一些考场规则...',
		'view problems' => '阅读题目',
		'click the button below to view problems.' => '点击下面的按钮开始阅读题目',
		'submit solutions' => '提交代码',
		'click the button below to submit solutions.' => '点击下面的按钮来提交代码',
		'check status' => '查看评测结果',
		'click the button below to check status.' => '点击下面的按钮来查看评测结果',
		'error' => '错误',
		'the test has not started!!' => '考试尚未开始！',
		'the test has ended!!' => '考试已经结束！',
		'return to index' => '返回主页',
		'sign in' => '登录',
		'student no.' => '学号',
		'passsword' => '密码',
		'problem list' => '题目列表',
		'status list' => '评测结果列表',
		'run id' => '记录编号',
		'problem' => '题目名称',
		'result' => '评测结果',
		'score' => '实际得分',
		'user' => '用户',
		'time' => '运行时间',
		'memory' => '占用内存',
		'submit time' => '提交时间',
		'waiting' => '等待中',
		'running' => '运行中',
		'accepted' => '正确',
		'time limit exceeded' => '超过时间限制',
		'memory limit exceeded' => '超过内存限制',
		'runtime error' => '运行时错误',
		'compile error' => '编译错误',
		'wrong answer' => '答案错误',
		'unkown error' => '未知错误',
		'language' => '语言',
		'code' => '源代码',
		'please input your student no.' => '请输入您的学号',
		'please input your password.' => '请输入您的密码',
		'authorization failed.' => '认证失败',
		'problem id is empty' => '题目编号不能为空',
		'empty or invalid language' => '请选择合法的语言',
		'source code is empty' => '源代码不能为空！',
		'submitted code is too long' => '提交的源代码过长'
	);
	if (array_key_exists(strtolower($s), $translate))
		return $translate[strtolower($s)];
	return $s;
}