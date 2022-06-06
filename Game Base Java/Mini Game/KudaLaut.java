import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class KudaLaut here.
 * 
 * @author (Bagus Dimas Adam M) 
 * @version (15 APRIL 2020)
 */
public class KudaLaut extends Actor
{
    GreenfootImage Image1=new GreenfootImage("seahorse.png");
    GreenfootImage Image2=new GreenfootImage("seahorse2.png");
    int speed=1;
    public KudaLaut(int A){
        if(A==0){
            setImage(Image1);
            speed=1*speed;
        }
        if(A==1){
            setImage(Image2);
            speed=-1*speed;
        }
    }
    
    public void act() 
    {
        move(speed);
        atEdge();
    } 
    
    public void atEdge(){
        if(getX()==699||getX()==5){
            BackWorld myWorld = (BackWorld)getWorld();
            myWorld.removeObject(this);
        }
    }
}