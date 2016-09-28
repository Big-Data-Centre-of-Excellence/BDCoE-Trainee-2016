package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Sad extends Entity {

    public Sad(int x, int y) {
        super(x, y);

        this.generator();
    }

    @Override
    public Image getImage() {
        return Resources.sad_pakia;
    }

    @Override
    public int getWidth() {
        return 52;
    }

    @Override
    public int getHeight() {
        return 51;
    }

    public void update()
    {
        super.update();

        if( this.x<0||this.y<0||this.y>500)
        {
            this.generator();
        }
    }


    public void generator()
    {
        int r= Utility.generate(5);
        System.out.println("sad r"+r);
        if(r==0)
        {
            this.x=500;
            this.y=510;
            this.yvel=-25;
            this.yaccn=1;
            this.xvel=-15;
            this.isHidden=true;
        }

        if(r==1)
        {
            this.x=500;
            this.y=510;
            this.yvel=-25;
            this.yaccn=1;
            this.xvel=-15;
            this.isHidden=true;
        }

        if(r==2)
        {
            this.x=500;
            this.y=510;
            this.yvel=-25;
            this.yaccn=1;
            this.xvel=-15;
            this.isHidden=true;
        }

        if(r==3)
        {
            this.x=500;
            this.y=510;
            this.yvel=-25;
            this.yaccn=1;
            this.xvel=-15;
            this.isHidden=true;
        }

        if(r==4)
        {
            this.x=500;
            this.y=510;
            this.yvel=-25;
            this.yaccn=1;
            this.xvel=-15;
            this.isHidden=false;
            Resources.sad.play();
        }

    }
}
