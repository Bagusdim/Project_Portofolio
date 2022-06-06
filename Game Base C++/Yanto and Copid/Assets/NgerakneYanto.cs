using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class NgerakneYanto : MonoBehaviour
{
    public float banter;
    Rigidbody rb;
    Animator anim;

    public Transform yantoMubeng;
   

    void Awake()
    {
        rb = GetComponent<Rigidbody>();
        anim = GetComponent<Animator>();
    }
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void FixedUpdate()
    {
        Ngerakne();
    }

    void Ngerakne()
    {
        float laku = Input.GetAxis("Horizontal"); //Nek mencet panah ngiri(-1), nek nganan (1).
        rb.velocity = Vector3.right * laku * banter;

        //dingge manipulasi banter e objek Yanto, minimal 0, maksimal 1
        anim.SetFloat("Banter", Mathf.Abs(laku), 0.1f, Time.deltaTime);
        //Mathf.Abs supoyo dados bilangan absolut (klik kiri dadi 1, klik kanan yo 1 mulai soko 0,1 ben semut jare) 

        //bagian ngerakne
        yantoMubeng.localEulerAngles = new Vector3(0, laku * 90, 0);
        //LolacEulerAgnles dingge ngubah playeRotation manut kalihan lakune * 90 (nek di klik kanan y ne nambah nganti 90, begitu sewalike)
    }

    //ngawe nek ora oleh kenek virus
    private void OnCollisionEnter(Collision collision)
    {
        if (collision.collider.CompareTag("virus"))//nek yanto bersentuhan karo virus sing Tag e (Virus)
        {
            //nek kenek virus yantone mati
            Time.timeScale = 0;
            //destroy(gameObject); dinggo nek pengen ngilangi yanto ne
        }
    }
       
}
