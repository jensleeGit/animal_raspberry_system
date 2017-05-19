系统思路：
一.网站
1.登录后台管理界面
	管理员功能：
		管理员密码验证登录
		能够开风扇
		开灯
		开门
		开窗
		查看视频监控
		查看温湿度（JavaScript显示）

二.硬件逻辑
1.红外线发现有人靠近，亮红灯，蜂鸣器响
2.超声波发现小于0.1m，马达转动，红灯亮
3.RFID刷卡时检测是否是管理员，是的话步进电机转动，绿灯亮，不是的话红灯亮
4.温度过高，风扇转动

	
三.硬件实现功能
树莓派GND
6,9,14，25,30,34，39

树莓派针脚使用情况：
1.1(电源3.3V)		RFID电源		红外线蜂鸣器电源
2.4	(电源5V)		马达电源		步进电动机电源		红外线电源		超声波正极
3.1	(I2C)			超声波TRIG
4(电源5V)
5.1	(I2C)			超声波ECHO
6.3	(GND)			RFID-GND		步进电动机GND		超声波GND
7()
8()
9(GND)
10()
11.1()				马达IN1
12.1(I/O)			马达IN2
13.1(I/O)			马达IN3
14.3(GND)			红外线GND	绿灯负极		红灯负极
15.1(I/O)			马达IN4
16(I/O)				红外线OUT
17(电源3.3)
18.1(I/O)			蜂鸣器正极
19.1()				RFID-MOSI
20.1(GND)			蜂鸣器负极
21.2()				RFID-MISO		红外线蜂鸣器负极
22.1(I/O)			RFID-RST
23.1()				RFID-SCK
24.1()				RFID-SDA
25(I/O)
26()
27()
28()
29.1(I/O)		红灯正极
30(GND)
31.1(I/O)			绿灯正极
32(I/O)
33(I/O)
34(GND)
35(I/O)		步进电动机IN4
36(I/O)		步进电动机IN3
37(I/O)
38(I/O)		步进电动机IN2
39(GND)
40(I/O)		步进电动机IN1


蜂鸣器		29
绿灯		31
红灯		32


1.马达：（一）	
OK			(1).超声波距离太近控制小车。
			
			PHP调用文件：
				前进：motor_forward.php
				后退：motor_backward.php
				左转：motor_left.php
				右转：motor_right.php
			
			Python文件：
				前进：motor_forward.py
				后退：motor_backward.py
				左转：motor_left.py
				右转：motor_right.py
		(2).温度太高，风扇转动
			
			PHP调用文件：
				前进：motor_fan.php
			
			Python文件：
				前进：motor_fan.py
				
		（二）.连接方式			
				IN1、IN2、IN3、IN4分别接了树莓派的GPIO11、GPIO12、GPIO13、GPIO15
				+5V接树莓派5V
				GND接电池盒负极
				+12V接电池盒正极
				电池盒为4节5号电池
				IN1 = 11
				IN2 = 12
				IN3 = 13
				IN4 = 15
				
				
2.RFID卡片：（一）.	人持卡片刷卡，若正确，绿灯;不正确，红灯。
OK				卡号UID：157,62,93,52

			(1).RC522读卡器：将读卡器的UID输入数据库，查询是否是管理员身份。
				如果是亮绿灯，开门；
				不是则红灯，蜂鸣器响，关门。
			（二）.连接方式
					3.3V-->1
					GND--->GND
					MISO-->21
					MOSI-->19
					SCK--->23
					RST--->22
					SDA--->24
			
3.步进电动机：（一）.开门。开窗，关窗。
OK			
			(1).有RFID刷卡，如正确，则开门
				
				PHP调用文件：
				开门/开窗：	step_motor_on.php
				关门/关窗：	step_motor_off.php
				
				Python文件：
				开门/开窗：	step_motor_on.py
				关门/关窗：	step_motor_off.py
				
			（二）.连接方式
				正极-->2  5.5V
				负极-->6  GND
				IN1-->GPIO 21（Pin 40）
				IN2-->GPIO 20（Pin 38）
				IN3-->GPIO 16（Pin 36）
				IN4-->GPIO 19（Pin 35）
				
4.红外线：	（一）.若晚上超过一定的时间，报警。
OK			人体靠近时，蜂鸣器响起;
			
			（二）.连接方式
			(1).PHP调用文件：
				infrare.php
				infrare.php
			
			(2).Python文件：
				infrare.py
				infrare.py
			
			蜂鸣器：连接方式：
				连接1，21
				加上100欧姆
				
			红外传感器：
				VCC-->2
				OUT-->12
				GND-->GND16
				要加上9k欧姆
				
5.蜂鸣器：	（一）.若晚上有人进来，报警。
OK		
			(1).PHP调用文件：
				buzzer_on.php
				buzzer_off.php
				
			(2).Python文件：
				buzzer_on.py
				buzzer_off.py
				
			（二）.连接方式
					PIN-->18
					PIN-->20
					
6.温湿度：	（一）.超过一定湿度温度打开马达。
			（二）.连接方式

			
7.光感：	（一）.晚上自动开灯，弱于一定的光照自动开灯。
			（二）.连接方式

8.LED灯：	（一）.绿色通过灯连接方式
OK			（二）.连接方式
					正极-->13
					负极-->14
			（三）.	红色报警灯灯连接方式
					正极-->12
					负极-->14
					
8.视频监控：（一）.进入后台的网站之后，能够查看动物园的情况。
OK			（二）.连接方式
				USB连接
				
9.超声波：	（一）.第一种方式：测量一次。检测距离，如靠近，则转动马达。
OK				(1).PHP文件调用
					ultra.php
					
					Python文件：
					ultra.py

			（二）.连接方式：
					VCC--->2    5.5V
					TRIG-->3
					ECHO-->5
					GND--->GND  6