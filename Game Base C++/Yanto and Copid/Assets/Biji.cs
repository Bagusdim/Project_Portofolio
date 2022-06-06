using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Biji : MonoBehaviour
{
    public  float biji;
    public Text bijiUI;
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    private void OnCollisionEnter(Collision collison)
    {
        if (collison.collider.CompareTag("virus")) //jika virus bersentuhan dengan object belakang player
        {
            GameOver();
            Destroy(collison.collider.gameObject);
        }
        else if (collison.collider.CompareTag("obat")) //jika sabun bersentuhan dengan object belakang player
        {
            TambahScore();
            Destroy(collison.collider.gameObject);
        }
    }

    public void TambahScore()
    {
        biji += 100;
        bijiUI.text = "Score : " + biji.ToString();
    }

    public void GameOver()
    {
       
        bijiUI.text = "Score : " + biji.ToString()  + "\r\n\r\n\r\nGame Over";
        
    }
}
