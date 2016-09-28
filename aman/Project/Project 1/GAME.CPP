#include<dos.h>
#include<time.h>
#include<conio.h>
#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include<process.h>
#include<iostream.h>
#include <graphics.h>

int ladder[5][2]={9,27,20,40,32,62,45,84,78,97};
int snake[5][2]={95,73,79,60,68,47,44,21,34,16};

void menu();
void board();
void one_player();
void two_player();
void main_screen();
void p1_coin(int,int);
void createwindo(int,int,int,int,int);
void bcreate(int,int,int,int,int);

void main()
{
	int gd=DETECT,gm;
	//int x1,y1,w1,z1;
	initgraph(&gd,&gm,"c:\\tc\\bgi");
	//w1=getmaxx(),z1=getmaxy();
	//x1=0;
	//y1=0;
	main_screen();
	//createwindo(x1,y1,w1,z1,9);
	getch();
	/*board();
	int dice,p1_score=0,p2_score=0,k;
	char ch,dc[5];
	randomize();
	ch=getch();
	if(ch=='e'||ch=='E')
	{
		exit(0);
	}
	int i;
	while(1)
	{
		int flag=0;
		//dice=0;
		again:
		k=random(6)+1;
		//dice+=k;
		if(p1_score+k>100)
		{
		}
		else
		{
			p1_score+=k;
		}
		for(i=0;i<=4;i++)
		{
			if(p1_score==ladder[i][0])
			{
				p1_score=ladder[i][1];
			}
			else if(p1_score==snake[i][0])
			{
				p1_score=snake[i][1];
				flag=1;
			}
			else
			{
			}

		}
		if(k==6&&flag==0)
		{
			goto again;
		}
		p1_coin(p1_score,p2_score);
		//outtextxy(492,304,"0");
		gotoxy(61,20);
		sprintf(dc,"%d",p1_score);
		puts(dc);
		ch=getch();
		if(p1_score==100)
		{
			cleardevice();
			settextstyle(1,0,5);
			setcolor(RED);
			outtextxy(100,100,"Player 1 Won");
			getch();
			exit(0);
		}
		if(ch=='e'||ch=='E')
		{
			exit(0);
		}
		dice=0;
		flag=0;
		re:
		k=random(6)+1;
		dice+=k;
		if(p2_score+k>100)
		{
		}
		else
		{
			p2_score+=k;
		}
		for(i=0;i<=4;i++)
		{
			if(p2_score==ladder[i][0])
			{
				p2_score=ladder[i][1];
			}
			else if(p2_score==snake[i][0])
			{
				p2_score=snake[i][1];
				flag=1;
			}
			else
			{
			}
		}
		if(k==6&&flag==0)
		{
			goto re;
		}
		p1_coin(p1_score,p2_score);
		//outtextxy(566,304,"0");
		gotoxy(71,20);
		sprintf(dc,"%d",p2_score);
		puts(dc);
		ch=getch();
		if(p2_score==100)
		{
			cleardevice();
			settextstyle(1,0,5);
			setcolor(RED);
			outtextxy(100,100,"Player 2 Won");
			getch();
			exit(0);
		}
		if(ch=='e'||ch=='E')
		{
			exit(0);
		}

	}*/
}
void menu()
{
	char menu[3][20]={"1-SINGLE PLAYER","2-DOUBLE PLAYER","ENTER YOUR CHOICE:"};
	settextstyle(7,0,2);
	int i=1,j,l;
	for(i=1;i<=3;i++)
	{
		gotoxy(30,10+2*i);
		l=strlen(menu[i-1]);
		for(j=0;j<=l;j++)
		{
			printf("%c",menu[i-1][j]);
			delay(100);
		}
	}
	setcolor(RED);
	rectangle(180,150,430,280);
	gotoxy(49,20);
	char n;
	n=getch();
	switch(n)
	{
		case 49:
			one_player();
			break;
		case 50:
			two_player();
			break;
		default:
			cleardevice();
			setcolor(GREEN);
			outtextxy(50,150,"YOU HAVE ENTERED A INVALID CHOICE");
			cout<<"\n";
			outtextxy(50,200,"DO YOU WANT TO GO BACK(y/n):");
			gotoxy(53,14);
			n=getch();
			if(n=='y'||n=='Y')
			{
				main_screen();
			}
			else
			{
				exit(0);
			}
	}
}


void board()
{
	int i,j,x=73,y=76;
	char cc[3],num=100;
	int m=2;

	setcolor(15);
	setfillstyle(1,3);
	bar(61,61,439,439);
	setcolor(0);
	rectangle(60,60,440,440);
	line(98,60,98,440);
	line(136,60,136,440);
	line(174,60,174,440);
	line(212,60,212,440);
	line(250,60,250,440);
	line(288,60,288,440);
	line(326,60,326,440);
	line(364,60,364,440);
	line(402,60,402,440);

	line(60,98,440,98);
	line(60,136,440,136);
	line(60,174,440,174);
	line(60,212,440,212);
	line(60,250,440,250);
	line(60,288,440,288);
	line(60,326,440,326);
	line(60,364,440,364);
	line(60,402,440,402);
	settextstyle(0,0,0);
	setcolor(0);
	setfillstyle(1,6);
	x=73;
	y=76;
	num=100;
	m=2;
	for(i=0;i<10;i++)
	{
		for(j=0;j<10;j++)
		{
			if(m==2)
			{
				if(j%2)
				floodfill(x,y,0);

			}
			else
			{
				if(!(j%2))
				floodfill(x,y,0);
			}
			sprintf(cc,"%d",num);
			num--;
			outtextxy(x,y,cc);
			x+=38;
		}
		if(m==3)
		m=2;
		else
		m=3;
		x=73;
		y+=38;
	}
setcolor(4);

//ladder 9->27
line(108,414,185,335);
line(109,414,186,335);
line(124,427,203,344);
line(125,427,204,344);
line(117,405,133,419);
line(117,404,133,418);
line(138,384,154,396);
line(138,383,154,395);
line(156,366,173,376);
line(156,367,173,377);
line(177,344,193,355);
line(177,345,193,356);

//ladder 20->40
setcolor(5);
line(65,385,70,312);
line(66,385,71,312);
line(85,385,96,314);
line(86,385,97,314);

line(66,377,87,377);
line(69,354,90,353);
line(71,333,92,332);

//ladder 32->62
setcolor(6);
line(369,300,384,194);
line(370,300,385,194);
line(385,302,397,198);
line(386,302,398,198);

line(370,295,387,295);
line(373,276,388,279);
line(376,256,391,260);
line(377,241,392,245);
line(381,222,395,226);
line(383,207,396,209);

//ladder 45->84
setcolor(1);
line(259,261,303,122);
line(258,261,302,122);
line(273,261,313,123);
line(272,261,312,123);

line(262,254,275,254);
line(266,237,280,238);
line(272,218,285,221);
line(277,202,289,204);
line(283,185,295,187);
line(288,168,300,167);
line(294,148,305,149);
line(299,131,310,131);

//ladder 78->97
setcolor(BLACK);
line(378,147,415,87);
line(379,147,416,87);
line(393,152,427,87);
line(394,152,428,87);

line(381,141,398,144);
line(391,128,406,128);
line(402,109,416,109);
line(410,92,424,95);
///////snakes
setfillstyle(9,5);
setcolor(1);
fillellipse(242,382,2,2);
fillellipse(246,379,2,2);
fillellipse(247,379,2,2);
fillellipse(249,378,2,2);
fillellipse(252,375,2,2);
fillellipse(251,370,2,2);
fillellipse(250,365,2,2);
fillellipse(248,354,3,2);
fillellipse(248,362,3,2);
fillellipse(245,358,3,2);
fillellipse(252,351,3,2);
fillellipse(261,351,3,2);
fillellipse(266,353,3,2);
fillellipse(284,348,3,2);
fillellipse(288,340,3,2);
fillellipse(275,351,3,2);
fillellipse(285,336,3,2);
fillellipse(283,329,3,2);
fillellipse(284,319,3,2);
fillellipse(287,317,3,2);
fillellipse(257,350,3,2);
fillellipse(270,352,3,2);
fillellipse(281,350,3,2);
fillellipse(286,345,2,2);
fillellipse(285,333,2,2);
fillellipse(283,323,2,2);
fillellipse(291,316,2,2);
fillellipse(295,316,2,2);

//snake 21->
setcolor(3);
fillellipse(420,358,3,2);
fillellipse(415,357,3,2);
fillellipse(404,350,3,2);
fillellipse(398,343,3,2);
fillellipse(392,335,3,2);
fillellipse(374,319,3,2);
fillellipse(362,315,3,2);
fillellipse(346,317,3,2);
fillellipse(333,313,3,2);
fillellipse(325,304,3,2);
fillellipse(319,293,3,2);
fillellipse(315,284,3,2);
fillellipse(316,289,3,2);
fillellipse(315,280,3,2);
fillellipse(321,298,3,2);
fillellipse(327,308,3,2);
fillellipse(323,301,3,2);

fillellipse(330,311,3,2);
fillellipse(337,315,3,2);
fillellipse(341,317,3,2);
fillellipse(352,317,3,2);
fillellipse(357,316,3,2);
fillellipse(368,313,3,2);
fillellipse(373,315,3,2);
fillellipse(374,323,3,2);
fillellipse(374,326,3,2);
fillellipse(375,330,3,2);
fillellipse(378,334,3,2);
fillellipse(383,334,3,2);
fillellipse(388,335,3,2);
fillellipse(393,337,3,2);
fillellipse(397,339,3,2);
fillellipse(399,348,3,2);
fillellipse(408,352,3,2);
fillellipse(411,354,3,2);
//snake 47
setcolor(RED);
fillellipse(155,205,3,2);
fillellipse(158,207,3,2);
fillellipse(162,209,3,2);
fillellipse(170,227,3,2);
fillellipse(169,219,3,2);
fillellipse(169,236,3,2);
fillellipse(169,247,3,2);
fillellipse(173,257,3,2);
fillellipse(181,264,3,2);
fillellipse(175,260,3,2);
fillellipse(165,212,3,2);
fillellipse(168,216,3,2);
fillellipse(171,222,3,2);
fillellipse(170,231,3,2);
fillellipse(170,241,3,2);
fillellipse(172,252,3,2);
fillellipse(178,262,3,2);
fillellipse(184,266,3,2);
//snake 60
setcolor(MAGENTA);
fillellipse(86,225,3,2);
fillellipse(90,221,3,2);
fillellipse(95,217,3,2);
fillellipse(101,212,3,2);
fillellipse(105,204,3,2);
fillellipse(106,196,3,2);
fillellipse(106,189,3,2);
fillellipse(106,179,3,2);
fillellipse(109,170,3,2);
fillellipse(112,164,3,2);
fillellipse(109,167,3,2);
fillellipse(107,174,3,2);
fillellipse(106,184,3,2);
fillellipse(106,194,3,2);
fillellipse(105,200,3,2);
fillellipse(103,208,3,2);
fillellipse(98,215,3,2);
fillellipse(92,219,3,2);
fillellipse(88,222,3,2);
//snake 73->94
setcolor(1);
fillellipse(285,87,3,2);
fillellipse(289,89,3,2);
fillellipse(295,91,3,2);
fillellipse(300,97,3,2);
fillellipse(305,104,3,2);
fillellipse(311,109,3,2);
fillellipse(320,113,3,2);
fillellipse(330,117,3,2);
fillellipse(338,122,3,2);
fillellipse(342,127,3,2);
fillellipse(345,132,3,2);
fillellipse(347,138,3,2);
fillellipse(350,142,3,2);
fillellipse(350,145,3,2);
fillellipse(298,93,3,2);
fillellipse(302,101,3,2);
fillellipse(307,107,3,2);
fillellipse(315,113,3,2);
fillellipse(325,112,3,2);
fillellipse(334,119,3,2);
fillellipse(340,125,3,2);
fillellipse(328,114,3,2);
//heads...
setfillstyle(6,14);
setcolor(0);
fillellipse(299,312,4,3);
fillellipse(314,276,4,3);
fillellipse(152,202,4,3);
fillellipse(116,161,4,3);
fillellipse(280,84,4,3);
}


void one_player()
{
	int x1,y1,w1,z1;
	w1=getmaxx(),z1=getmaxy();
	x1=0;
	y1=0;
	createwindo(x1,y1,w1,z1,9);
	board();
	int dice,p1_score=0,p2_score=0,k;
	char ch,dc[5];
	randomize();
	int i;
	while(1)
	{
		int flag=0,j=0;
		ch=getch();
		if(ch=='e'||ch=='E')
		{
			exit(0);
		}
		//dice=0;
		again:
		k=random(6)+1;
		//dice+=k;
		if(p1_score+k>100)
		{
		}
		else
		{
			p1_score+=k;
		}
		for(i=0;i<=4;i++)
		{
			if(p1_score==ladder[i][0])
			{
				p1_score=ladder[i][1];
			}
			else if(p1_score==snake[i][0])
			{
				p1_score=snake[i][1];
				flag=1;
			}
			else
			{
			}

		}
		if(k==6&&flag==0)
		{
			j++;
			if(j==3)
			{
				p1_score=p1_score-18;
				goto chance;
			}
			goto again;
		}
		chance:
		j=0;
		gotoxy(61,20);
		cprintf(dc,"%d",p1_score);
		puts(dc);
		if(p1_score==100)
		{
			cleardevice();
			settextstyle(1,0,5);
			setcolor(RED);
			outtextxy(100,100,"Player 1 Won");
			getch();
			exit(0);
		}
		flag=0;
		//dice=0;
		re:
		k=random(6)+1;
		//dice+=k;
		if(p2_score+k>100)
		{
		}
		else
		{
			p2_score+=k;
		}
		for(i=0;i<=4;i++)
		{
			if(p2_score==ladder[i][0])
			{
				p2_score=ladder[i][1];
			}
			else if(p2_score==snake[i][0])
			{
				p2_score=snake[i][1];
				flag=1;
			}
			else
			{
			}
		}
		if(k==6&&flag==0)
		{
			j++;
			if(j==3)
			{
				p2_score-=18;
				goto chance2;
			}
			goto re;
		}
		chance2:
		p1_coin(p1_score,p2_score);
		gotoxy(71,20);
		sprintf(dc,"%d",p2_score);
		puts(dc);
		if(p2_score==100)
		{
			cleardevice();
			settextstyle(1,0,5);
			setcolor(RED);
			outtextxy(100,100,"Computer Won");
			getch();
			exit(0);
		}
	}
}
void two_player()
{
	int x1,y1,w1,z1;
	w1=getmaxx(),z1=getmaxy();
	x1=0;
	y1=0;
	createwindo(x1,y1,w1,z1,9);
	board();
	int dice,p1_score=0,p2_score=0,k;
	char ch,dc[5];
	randomize();
	ch=getch();
	if(ch=='e'||ch=='E')
	{
		exit(0);
	}
	int i;
	while(1)
	{
		//dice=0;
		int flag=0;
		again:
		k=random(6)+1;
		//dice+=k;
		if(p1_score+k>100)
		{
		}
		else
		{
			p1_score+=k;
		}
		for(i=0;i<=4;i++)
		{
			if(p1_score==ladder[i][0])
			{
				p1_score=ladder[i][1];
			}
			else if(p1_score==snake[i][0])
			{
				p1_score=snake[i][1];
				flag=1;
			}
			else
			{
			}

		}
		if(k==6&&flag==0)
		{
			goto again;
		}
		p1_coin(p1_score,p2_score);
		gotoxy(61,20);
		sprintf(dc,"%d",p1_score);
		puts(dc);
		ch=getch();
		if(p1_score==100)
		{
			cleardevice();
			settextstyle(1,0,5);
			setcolor(RED);
			outtextxy(100,100,"Player 1 Won");
			getch();
			exit(0);
		}
		if(ch=='e'||ch=='E')
		{
			exit(0);
		}
		//dice=0;
		re:
		k=random(6)+1;
		//dice+=k;
		if(p2_score+k>100)
		{
		}
		else
		{
			p2_score+=k;
		}
		for(i=0;i<=4;i++)
		{
			if(p2_score==ladder[i][0])
			{
				p2_score=ladder[i][1];
			}
			else if(p2_score==snake[i][0])
			{
				p2_score=snake[i][1];
				flag=1;
			}
			else
			{
			}
		}
		if(k==6&&flag==0)
		{
			goto re;
		}
		p1_coin(p1_score,p2_score);
		gotoxy(71,20);
		sprintf(dc,"%d",p2_score);
		puts(dc);
		ch=getch();
		if(p2_score==100)
		{
			cleardevice();
			settextstyle(1,0,5);
			setcolor(RED);
			outtextxy(100,100,"Player 2 Won");
			getch();
			exit(0);
		}
		if(ch=='e'||ch=='E')
		{
			exit(0);
		}

	}
}
void main_screen()
{
	cleardevice();
	settextstyle(1,0,9);
	setcolor(RED+BLINK);
	outtextxy(100,5,"WELCOME");
	setcolor(BLUE);
	outtextxy(260,100,"TO");
	setcolor(MAGENTA);
	outtextxy(160,195,"SNAKE");
	setcolor(GREEN);
	outtextxy(120,290,"LADDERS");
	settextstyle(1,0,3);
	setcolor(CYAN);
	outtextxy(200,420,"BY AMAN AGGARWAL");
	delay(2000);
	cleardevice();
	menu();
}
void p1_coin(int p1_score,int p2_score)
{
	cleardevice();
	int x,y,a,b;
	x=460-38*(p1_score%10);
	y=420-38*(p1_score/10);
	a=460-38*(p2_score%10);
	b=420-38*(p2_score/10);
	int x1,y1,w1,z1;
	w1=getmaxx(),z1=getmaxy();
	x1=0;
	y1=0;
	createwindo(x1,y1,w1,z1,9);
	board();
	setfillstyle(1,4);
	if(p1_score%10!=0)
	{
		bar(x,y+5,x+10,y+10);
	}
	else
	{
		bar(80,y+43,90,y+48);
	}
	setfillstyle(1,14);
	if(p2_score%10!=0)
	{
		bar(a,b-5,a+10,b);
	}
	else
	{
		bar(80,b+33,90,b+38);
	}
	gotoxy(61,20);
	cout<<p1_score;
	gotoxy(71,20);
	cout<<p2_score;
}
void createwindo(int x,int y,int w,int z,int col)
{
	setcolor(8);
	//outer rectangle
	rectangle(x,y,w,z);
	//setcolor(7);
	setfillstyle(SOLID_FILL,14);
	//rectangle(x+1,x+1,w-1,z-1);
	floodfill(x+3,y+3,7);
	setcolor(7);
	setfillstyle(SOLID_FILL,col);
	//inner rectangle
	rectangle(x+30,y+30,w-20,z-20);
	floodfill(x+32,y+32,7);
	setfillstyle(SOLID_FILL,8);
	settextstyle(DEFAULT_FONT,0,1);
	setcolor(0);
	rectangle(249,7,386,22);
	setcolor(15);
	rectangle(250,8,385,21);
	rectangle(248,6,387,23);
	setfillstyle(1,0);
	//fill black colour inside menu
	floodfill(307,13,15);
	outtextxy(260,12,"SNAKE & LADDERS ");
	settextstyle(SMALL_FONT,0,4);
	setcolor(2);
	//SCORE
	bcreate(475,290,515,325,0);
	bcreate(550,290,590,325,0);
	//dice keeper
	settextstyle(0,0,0);
	setcolor(0);
	line(526,220,596,220);
	line(465,239,535,239);
	line(526,220,465,239);
	line(596,220,535,239);
	rectangle(465,239,535,246);
	line(535,246,596,226);
	line(596,220,596,226);

	setfillstyle(5,3);
	floodfill(473,244,0);
	setfillstyle(4,3);
	floodfill(541,240,0);
	setfillstyle(9,11);
	floodfill(524,230,0);

	//dice on board

	setcolor(15);
	setfillstyle(1,12);
	rectangle(517,200,549,221);
	bar(518,201,548,220);
	rectangle(507,207,539,228);
	bar(508,208,538,227);
	line(517,200,507,207);
	line(539,208,549,200);
	line(539,228,549,221);
	floodfill(514,205,15);
	floodfill(541,223,15);
	setcolor(12);
	line(548,221,540,221);
	line(517,201,517,206);

	setcolor(0);
	outtextxy(487,264,"SCORE BOARD");

	//rectangle(458,275,527,328);
	//rectangle(534,275,603,328);

	//icon
	setfillstyle(1,4);
	bar(509,363,490,373);
	setfillstyle(1,14);
	bar(509,414,491,424);

	setcolor(15);
	//outtextxy(492,304,"0");
	//outtextxy(566,304,"0");
	outtextxy(462,279,"PLAYER-1");
	outtextxy(538,279,"PLAYER-2");
	setcolor(0);
	outtextxy(536,364,"Player-1");
	outtextxy(536,418,"Player-2");
	outtextxy(530,98,"E-EXIT GAME");
}
void bcreate(int x,int y,int w,int z,int col)
{

	setcolor(7);
	rectangle(x,y,w,z);
	setcolor(8);
	setfillstyle(SOLID_FILL,8);
	rectangle(x+1,y+1,w,z);
	floodfill(x+5,y+5,8);
	setfillstyle(SOLID_FILL,col);
	bar(x+5,y+5,w-5,z-5);
}

