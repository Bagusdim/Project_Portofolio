import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class KudaLaut2 here.
 * 
 * @author (Bagus Dimas Adam M) 
 * @version (15 APRIL 2020)
 */
public class KudaLaut2 extends Actor
{
    /**
     * Act - do whatever the KudaLaut2 wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act() 
    {
        gerakAcak();
        atTepi();
    }    
    
    public void gerakAcak()
    {
        move(-1);
        if(Greenfoot.getRandomNumber(100)<30)
        {
            turn(Greenfoot.getRandomNumber(30)-15);
        }
    }
    
    public void atTepi(){
        if(getX()==0)
        {
            removeTouching(KudaLaut2.class);
        }
        if(getX()==899)
        {
            removeTouching(KudaLaut2.class);
        }
        if(getY()==0)
        {
            removeTouching(KudaLaut2.class);
        }
        if(getY()==599)
        {
            removeTouching(KudaLaut2.class);
        }
    }  
}

