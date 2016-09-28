package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 23-09-2016.
 */
public class Branch3 extends Entity {
    public Branch3(int x, int y) {
        super(x, y);
        this.xvel=-10;
        this.ygenerator();
    }

    @Override
    public Image getImage() {
        return Resources.branch;
    }

    @Override
    public int getWidth() {
        return 31;
    }

    @Override
    public int getHeight() {
        return 500;
    }

    public void update()
    {
        super.update();
        if(this.x<0) {
            this.isHidden=false;
            this.x = 2400;
            this.ygenerator();
        }

        this.setBound();
    }

    public void ygenerator()
    {
        int s;
       s= Utility.generate(3);
     //   System.out.println(s);
        if(s==0)
            this.y=-200;
        else
            if(s==1)
            this.y=-150;
        else
            if(s==2) {
                this.y = 100;
                this.isHidden=true;
            }
    }
}
